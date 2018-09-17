var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var unitID = sessionStorage.getItem("unitID");
var propertyName = sessionStorage.getItem("propertyName");
var findID = sessionStorage.getItem("findID");
var propertydocRef;
var name;
var email;
var contactNumber;

$(document).ready(function(){
    loadDetails();
    
    $("#EditUser").off('click').on('click', function(){
        $("#newusername").val("");
        $("#newemail").val("");
        $("#newcontact").val("");

        $("#newusername").prop('disabled', false);
        $("#newemail").prop('disabled', false);
        $("#newcontact").prop('disabled', false);
        $("#SaveUser").prop('disabled', false);
        $("#CancelUser").prop('disabled', false);
    });

    $("#EditProperty").off('click').on('click', function(){
        $("#assignedproperty").val("");
        $("#assignedunit").val("");

        $("#assignedproperty").prop('disabled', false);
        $("#assignedunit").prop('disabled', false);
        $("#SaveProperty").prop('disabled', false);
        $("#CancelProperty").prop('disabled', false);
    });
    
    $("#SaveUser").off('click').on('click', function(){
        UpdateUser();
    });

    $("#SaveProperty").off('click').on('click', function(){
        UpdateProperty();
    });

    $("#CancelUser").off('click').on('click', function(){
        $("#newusername").val(name);
        $("#newemail").val(email);
        $("#newcontact").val(contactNumber);
        
        $("#newusername").prop('disabled', true);
        $("#newemail").prop('disabled', true);
        $("#newcontact").prop('disabled', true);
        $("#SaveUser").prop('disabled', true);
        $("#CancelUser").prop('disabled', true);
    });

    $("#CancelProperty").off('click').on('click', function(){
        $("#assignedproperty").val(propertyName);
        $("#assignedunit").val(unitID);
        
        $("#assignedproperty").prop('disabled', true);
        $("#assignedunit").prop('disabled', true);
        $("#SaveProperty").prop('disabled', true);
        $("#CancelProperty").prop('disabled', true);
    });
});

function loadDetails()
{
    firebase.auth().onAuthStateChanged(function(user) {
    if (!user) {
        window.location = 'login.html';
        }
        $('#userprofile').html(user.email);

        propertydocRef = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members").doc(findID);

        propertydocRef.get().then(function(doc) {
            if (doc.exists) {
                name = doc.data().member_name;
                email = doc.data().member_email;
                contactNumber = doc.data().member_ContactNumber;

                $("#assignedproperty").html("<option>"+propertyName+"</option><option>No Property</option>");
                $("#assignedunit").html("<option>"+unitID+"</option><option>No Unit</option>");
                $("#newusername").val(doc.data().member_name);
                $("#newemail").val(doc.data().member_email);
                $("#newcontact").val(doc.data().member_ContactNumber);
            }
            else {
                // doc.data() will be undefined in this case
                console.log("No such document!");
            }
        });
    });
}

function UpdateUser()
{
    // console.log(propertyID);
    // console.log(unitID);
    var memberName = $("#newusername").val();
    var memberEmail = $("#newemail").val();
    var memberContactNumber = '+6' + $("#newcontact").val();

    if(memberName == "")
    {
        propertydocRef.update({
            member_name: name,
            member_email: memberEmail,
            member_ContactNumber:memberContactNumber,
            member_property:propertyName,
            member_unit:unitID
        })
        .then(function() {
            alert("The data has been saved successfully!");
        })
    }
    else if(memberEmail == "")
    {
        propertydocRef.update({
            member_name: memberName,
            member_email: email,
            member_ContactNumber:memberContactNumber,
            member_property:propertyName,
            member_unit:unitID
        })
        .then(function() {
            alert("The data has been saved successfully!");
        })
    }
    else if(memberContactNumber == "")
    {
        propertydocRef.update({
            member_name: memberName,
            member_email: memberEmail,
            member_ContactNumber:contactNumber,
            member_property:propertyName,
            member_unit:unitID
        })
        .then(function() {
            alert("The data has been saved successfully!");
        })
    }
    else if(memberName == "" && memberEmail == "")
    {
        propertydocRef.update({
            member_name: name,
            member_email: email,
            member_ContactNumber:memberContactNumber,
            member_property:propertyName,
            member_unit:unitID
        })
        .then(function() {
            alert("The data has been saved successfully!");
        })
    }
    else if(memberName == "" && memberContactNumber == "")
    {   
        propertydocRef.update({
            member_name: name,
            member_email: memberEmail,
            member_ContactNumber:contactNumber,
            member_property:propertyName,
            member_unit:unitID
        })
        .then(function() {
            alert("The data has been saved successfully!");
        })
    }
    else if(memberEmail == "" && memberContactNumber == "")
    {
        propertydocRef.update({
            member_name: memberName,
            member_email: email,
            member_ContactNumber:contactNumber,
            member_property:propertyName,
            member_unit:unitID
        })
        .then(function() {
            alert("The data has been saved successfully!");
        })
    }
    else
    {
        alert("Please fill at least one of the field");
    }

    propertydocRef.get().then(function(doc) {
        if (doc.exists) {
            name = doc.data().member_name;
            email = doc.data().member_email;
            contactNumber = doc.data().member_ContactNumber;

            $("#assignedproperty").val(propertyName);
            $("#assignedunit").val(unitID);
            $("#newusername").val(doc.data().member_name);
            $("#newemail").val(doc.data().member_email);
            $("#newcontact").val(doc.data().member_ContactNumber);

            $("#newusername").prop('disabled', false);
            $("#newemail").prop('disabled', false);
            $("#newcontact").prop('disabled', false);
            $("#SaveUser").prop('disabled', false);
            $("#CancelUser").prop('disabled', false);
        }
        else {
            // doc.data() will be undefined in this case
            console.log("No such document!");
        }
    });
}

function UpdateProperty()
{

    $("#assignedproperty").prop('disabled', false);
    $("#assignedunit").prop('disabled', false);
    $("#SaveProperty").prop('disabled', false);
    $("#CancelProperty").prop('disabled', false);
}