var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var unitID = sessionStorage.getItem("unitID");
var propertyName = sessionStorage.getItem("propertyName");

$(document).ready(function(){
    loadDetails();
    
    $("#assignedproperty").html("<option>"+propertyName+"</option><option>No Property</option>");
    // $("#assignedunit").html("<option>"+unitID+"</option><option>No Unit</option><option>0</option>");
    
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
        var userId = user.uid;

        var userdocRef = db.collection("users").doc(userId);

        userdocRef.get().then(function(doc) {
            if (doc.exists) {
                propertyID = doc.data().property_id;
                loadUnits(propertyID);
            }
            else {
                $("#modalTitle").html("Error Message");
                $("#message").html("Cannot find this user in database");
                $("#messageModal").modal();
                // doc.data() will be undefined in this case
                //console.log("No such document!");
            }
            
        });
     });

}

function loadUnits(propertyID)
{
    var propertyName = db.collection("properties").doc(propertyID).collection("units");

    propertyName.get().then(function(querySnapshot){
        querySnapshot.forEach(function(doc){
            $("#assignedunit").append("<option>"+doc.id+"</option>");
        });
        $("#wait").css("display", "none");
    });
  
}

function addnewuser()
{
    $("#Add").prop("disabled",true);
    $("#wait").css("display", "block");
    var memberName = $("#newusername").val();
    var memberEmail = $("#newemail").val();
    var contactNum =  $("#newcontact").val();
    var memberPassword = $("#newpassword").val();
    var contactSelect =$("#contactSelect option:selected").val();
    var assignedUnit = $("#assignedunit option:selected").val();
    var memberContactNumber = contactSelect + contactNum;

    var propertydocRef = db.collection("properties").doc(propertyID).collection("units").doc(assignedUnit).collection("unit_members");
    var propertyMemberRef = db.collection("properties").doc(propertyID).collection("property_members");
    var userRef = db.collection("users");
    var error = 0;

    if(memberName == "")
    {
        $("#modalTitle").html("Error Message");
        $("#message").html("The member name cannot be blank!");
        
        error = 1;
        $("#wait").css("display", "none");
        $("#Add").prop("disabled",false);
        $("#messageModal").modal();
    }
    else if(memberEmail == "")
    {
        $("#modalTitle").html("Error Message");
        $("#message").html("The member email cannot be blank!");
        
        error = 1;
        $("#wait").css("display", "none");
        $("#Add").prop("disabled",false);
        $("#messageModal").modal();
    }
    else if(contactNum == "")
    {
        $("#modalTitle").html("Error Message");
        $("#message").html("The member contact number cannot be blank!");
        
        error = 1;
        $("#wait").css("display", "none");
        $("#Add").prop("disabled",false);
        $("#messageModal").modal();
    }
    else
    {
        userRef.get().then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                
                if(memberName == doc.data().name)
                {
                    $("#modalTitle").html("Error Message");
                    $("#message").html("This name has been used!");
                    error = 1;
                    $("#wait").css("display", "none");
                    $("#Add").prop("disabled",false);
                    $("#messageModal").modal();
                }
                else if(memberEmail == doc.data().email)
                {
                    $("#modalTitle").html("Error Message");
                    $("#message").html("This email has been used!");
                    error = 1;
                    $("#wait").css("display", "none");
                    $("#Add").prop("disabled",false);
                    $("#messageModal").modal();
                }
                else
                {
                    error = 0;
                }
            });
    
        if(error == 0)
        {    
            $.ajax({
                type:"POST",
                url:"https://us-central1-shieldgarden2018.cloudfunctions.net/createUser",
                dataType: "json",
                heaaders:{
                    'Content-Type':  'application/json',       
                    'Authorization': 'c49a1a3c56c54fb6018ad3f0af2565ccee6518ef'
                },
                data:{
                    name: memberName,
                    email:memberEmail,
                    password:memberPassword,
                    phone:contactNum,
                    country_code:contactSelect,
                    property_id:propertyID,
                    unit_id:assignedUnit
                },
                success: function(resp,textstatus,jqXHR){
                    console.log(resp);
                    alert("The data has been saved successfully!");
                    $("#Add").prop("disabled",false);
                    $("#wait").css("display", "none");
                    firebase.auth().signOut();
                },
                error: function(resp,textstatus,jqXHR){
                    console.log(resp);
                    $("#Add").prop("disabled",false);
                    $("#wait").css("display", "none");
                    $("#modalTitle").html("Error Message");
                    $("#message").html("The data cannot save in database!");
                    $("#messageModal").modal();
                },
            })

        //     firebase.auth().createUserWithEmailAndPassword(memberEmail, memberPassword)
        //     .then(function(firebaseUser){
        //         var uid = firebaseUser.user.uid;
                
        //         var property = $("#assignedproperty option:selected").val();
        //         var unit = $("#assignedunit option:selected").val();
        //         var fullAddress = unit +", "+property;

        //         var userdocRef = db.collection("users").doc(uid);
                
        //         userdocRef.set({
        //             admin: true,
        //             app_platform: null,
        //             app_version: null,
        //             country_code: null,
        //             email:memberEmail,
        //             full_address:null,
        //             name:memberName,
        //             phone_model:null,
        //             phone_number:memberContactNumber,
        //             property_id:propertyID,
        //             unit_id:assignedUnit,
        //             user_id:uid
        //         }).then(function()
        //         {
        //             propertyMemberRef.add({
        //                     p_member_email:memberEmail,
        //                     p_member_name: memberName,
        //                     p_member_uid: uid,
        //                     p_member_unit_id:assignedUnit,
        //                     p_member_number: memberContactNumber,
        //                     p_member_property:property
        //                 }).then(function(){
        //                     propertydocRef.add({
        //                         member_name: memberName,
        //                         //member_password:memberPassword,
        //                         member_email: memberEmail,
        //                         member_number:memberContactNumber,
        //                         member_property:property,
        //                         member_unit:assignedUnit,
        //                         member_uid:uid
        //                     })
        //                     .then(function() {
        //                         // $("#modalTitle").html("Manage User");
        //                         // $("#message").html("The data has been saved successfully!");
        //                         // $("#messageModal").modal();
        //                         alert("The data has been saved successfully!");
        //                         $("#Add").prop("disabled",false);
        //                         $("#wait").css("display", "none");
        //                         firebase.auth().signOut();
        //                     })
        //                     .catch(function(error) {
        //                         var errorCode = error.code;
        //                         var errorMessage = error.message;
                                
        //                         $("#Add").prop("disabled",false);
        //                         $("#wait").css("display", "none");
        //                         $("#modalTitle").html("Error Message");
        //                         $("#message").html("The data cannot save in database!");
        //                         $("#messageModal").modal();
        //                     });
        //             }).catch(function(){
        //                 var errorCode = error.code;
        //                 var errorMessage = error.message;
                        
        //                 $("#Add").prop("disabled",false);
        //                 $("#wait").css("display", "none");
        //                 $("#modalTitle").html("Error Message");
        //                 $("#message").html("The data cannot save in database!");
        //                 $("#messageModal").modal();
        //             });             
        //         })
        //         .catch(function(error) {
        //             var errorCode = error.code;
        //             var errorMessage = error.message;
                    
        //             $("#Add").prop("disabled",false);
        //             $("#wait").css("display", "none");
        //             $("#modalTitle").html("Error Message");
        //             $("#message").html("The data cannot save in database!");
        //             $("#messageModal").modal();
        //         });
        //     })
        //     .catch(function(error) {
        //         var errorCode = error.code;
        //         var errorMessage = error.message;
                
        //         $("#Add").prop("disabled",false);
        //         $("#wait").css("display", "none");
        //         $("#modalTitle").html("Error Message");
        //         $("#message").html("The data cannot save in database!");
        //         $("#messageModal").modal();
        //     });
        // }
        
        // });
        });
    }
}

function logout()
{
    firebase.auth().signOut()
  .then(function() {
    window.location = 'login.html';
  })
  .catch(function(error) {
    $("#modalTitle").html("Error Message");
    $("#message").html("Error for logout");
    $("#messageModal").modal();
  });
}

