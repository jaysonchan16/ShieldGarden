var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var unitID = sessionStorage.getItem("unitID");
var propertyName = sessionStorage.getItem("propertyName");

$(document).ready(function(){
    loadDetails();
    
    $("#assignedproperty").html("<option>"+propertyName+"</option><option>No Property</option>");
    $("#assignedunit").html("<option>"+unitID+"</option><option>No Unit</option><option>A-00-00</option>");
    
    $("#Add").off('click').on('click', function(){
        addnewuser();
    });

    $("#mainPage").off('click').on('click', function(){
        window.location = 'ManageUser.html';
    }); 
});

function loadDetails()
{
     firebase.auth().onAuthStateChanged(function(user) {
    var user = firebase.auth().currentUser;
    if (!user) {
        window.location = 'login.html';
        }
        $('#userprofile').html(user.email);

     });
}

function addnewuser()
{
    // console.log(propertyID);
    // console.log(unitID);
    var memberName = $("#newusername").val();
    var memberEmail = $("#newemail").val();
    var memberContactNumber = '+6' + $("#newcontact").val();
    var memberPassword = $("#newpassword").val();

    var propertydocRef = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members");
    
    firebase.auth().createUserWithEmailAndPassword(memberEmail, memberPassword)
    .then(function(firebaseUser){
        var uid = firebaseUser.user.uid;
        
        var property = $("#assignedproperty option:selected").val();
        var unit = $("#assignedunit option:selected").val();
        var fullAddress = unit +", "+property;

        var userdocRef = db.collection("users").doc(uid);
        
        userdocRef.set({
            admin: false,
            app_platform: null,
            app_version: null,
            country_code: null,
            email:memberEmail,
            full_address:fullAddress,
            name:memberName,
            phone_model:null,
            phone_number:memberContactNumber,
            property_id:propertyID,
            unit_id:unitID,
            user_id:uid
        }).then(function()
        {
            propertydocRef.add({
                member_name: memberName,
                member_password:memberPassword,
                member_email: memberEmail,
                member_ContactNumber:memberContactNumber,
                member_property:property,
                member_unit:unit,
                member_id:uid
            })
            .then(function() {
                alert("The data has been saved successfully!");
                firebase.auth().signOut();
            })
            .catch(function(error) {
                var errorCode = error.code;
                var errorMessage = error.message;
            });             
        })
        .catch(function(error) {
            var errorCode = error.code;
            var errorMessage = error.message;
        });
    })
    .catch(function(error) {
        var errorCode = error.code;
        var errorMessage = error.message;
    });

    
}