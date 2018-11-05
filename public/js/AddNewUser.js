var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var unitID = sessionStorage.getItem("unitID");
var propertyName = sessionStorage.getItem("propertyName");

$(document).ready(function(){
    loadDetails();
    
    $("#assignedproperty").html("<option>"+propertyName+"</option><option>No Property</option>");
    $("#assignedunit").html("<option>"+unitID+"</option><option>No Unit</option><option>0</option>");
    
    $("#Add").off('click').on('click', function(){
        addnewuser();
    });

    $("#mainPage").off('click').on('click', function(){
        window.location = 'ManageUser.html';
    }); 
});

function loadDetails()
{
    $("#wait").css("display", "block");
     firebase.auth().onAuthStateChanged(function(user) {
    var user = firebase.auth().currentUser;
    if (!user) {
        window.location = 'login.html';
        }
        $('#userprofile').html(user.email);
        $("#wait").css("display", "none");
     });
}

function addnewuser()
{
    $("#Add").prop("disabled",true);
    $("#wait").css("display", "block");
    var memberName = $("#newusername").val();
    var memberEmail = $("#newemail").val();
    var contactNum = '+6' + $("#newcontact").val();
    var memberPassword = $("#newpassword").val();
    var contactSelect =$("#contactSelect option:selected").val();
    var memberContactNumber = contactSelect + contactNum;

    var propertydocRef = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members");
    var propertyMemberRef = db.collection("properties").doc(propertyID).collection("property_members");
    var userRef = db.collection("users");
    var error = 0;

    userRef.get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            
            if(memberName == doc.data().name)
            {
                alert("This name has been used!")
                error = 1;
                $("#wait").css("display", "none");
                $("#Add").prop("disabled",false);
            }
            else if(memberEmail == doc.data().email)
            {
                error = 1;
                $("#wait").css("display", "none");
                $("#Add").prop("disabled",false);
            }
            else
            {
                error = 0;
            }
        });
    
        if(error == 0)
        {    
            firebase.auth().createUserWithEmailAndPassword(memberEmail, memberPassword)
            .then(function(firebaseUser){
                var uid = firebaseUser.user.uid;
                
                var property = $("#assignedproperty option:selected").val();
                var unit = $("#assignedunit option:selected").val();
                var fullAddress = unit +", "+property;

                var userdocRef = db.collection("users").doc(uid);
                
                userdocRef.set({
                    admin: true,
                    app_platform: null,
                    app_version: null,
                    country_code: null,
                    email:memberEmail,
                    full_address:null,
                    name:memberName,
                    phone_model:null,
                    phone_number:memberContactNumber,
                    property_id:propertyID,
                    unit_id:unitID,
                    user_id:uid
                }).then(function()
                {
                    propertyMemberRef.add({
                            p_member_email:memberEmail,
                            p_member_name: memberName,
                            p_member_uid: uid,
                            p_member_unit_id:unit
                        }).then(function(){
                            propertydocRef.add({
                                member_name: memberName,
                                //member_password:memberPassword,
                                member_email: memberEmail,
                                member_number:memberContactNumber,
                                member_property:property,
                                member_unit:unit,
                                member_uid:uid
                            })
                            .then(function() {
                                alert("The data has been saved successfully!");
                                $("#Add").prop("disabled",false);
                                $("#wait").css("display", "none");
                                firebase.auth().signOut();
                            })
                            .catch(function(error) {
                                var errorCode = error.code;
                                var errorMessage = error.message;
                                alert(errorMessage);
                                $("#wait").css("display", "none");
                            });
                    }).catch(function(){
                        var errorCode = error.code;
                        var errorMessage = error.message;
                        alert(errorMessage);
                        $("#wait").css("display", "none");
                    });             
                })
                .catch(function(error) {
                    var errorCode = error.code;
                    var errorMessage = error.message;
                    alert(errorMessage);
                    $("#wait").css("display", "none");
                });
            })
            .catch(function(error) {
                var errorCode = error.code;
                var errorMessage = error.message;
                alert(errorMessage);
                $("#wait").css("display", "none");
            });
        }
        
    });
}

function logout()
{
    firebase.auth().signOut()
  .then(function() {
    window.location = 'login.html';
  })
  .catch(function(error) {
    // An error happened
  });
}

