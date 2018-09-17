var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var unitID = sessionStorage.getItem("unitID");
var propertyName = sessionStorage.getItem("propertyName");

$(document).ready(function(){
    loadDetails();
    
    $("#assignedproperty").html("<option>"+propertyName+"</option><option>No Property</option>");
    $("#assignedunit").html("<option>"+unitID+"</option><option>No Unit</option>");
    
    $("#Add").off('click').on('click', function(){
        addnewuser();
    });
});

function loadDetails()
{
    firebase.auth().onAuthStateChanged(function(user) {
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

    var propertydocRef = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members");

    propertydocRef.add({
        member_name: memberName,
        member_email: memberEmail,
        member_ContactNumber:memberContactNumber,
        member_property:propertyName,
        member_unit:unitID
    })
    .then(function() {
        alert("The data has been saved successfully!");
    })
}