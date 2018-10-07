var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var unitID = sessionStorage.getItem("unitID");
var propertyName = sessionStorage.getItem("propertyName");
var findID = sessionStorage.getItem("findID");
var propertydocRef;
var name;
var email;
var contactNumber;
var property;
var unit;
var currentproperty;
var currentunit;
var password;
var memberID;

$(document).ready(function(){
    loadDetails();
    
    $("#mainPage").off('click').on('click', function(){
        window.location = 'ManageUser.html';
    }); 

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
        // $("#assignedproperty").val("");
        // $("#assignedunit").val("");

        // $("#assignedproperty").prop('disabled', false);
        // $("#assignedunit").prop('disabled', false);

        $("#assignedpropertydrop").html("<option>"+propertyName+"</option><option>No Property</option>");
        $("#assignedunitdrop").html("<option>"+unitID+"</option><option>No Unit</option><option>A-00-00</option>");
        $("#SaveProperty").prop('disabled', false);
        $("#CancelProperty").prop('disabled', false);
        $("#noedit").hide();
        $("#edit").show();
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
        $("#assignedproperty").val(currentproperty);
        $("#assignedunit").val(currentunit);
        
        // $("#assignedproperty").prop('disabled', true);
        // $("#assignedunit").prop('disabled', true);
        // $("#SaveProperty").prop('disabled', true);
        // $("#CancelProperty").prop('disabled', true);

        $("#noedit").show();
        $("#edit").hide();
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

                currentproperty = doc.data().member_property;
                currentunit = doc.data().member_unit;
                password = doc.data().member_password;
                memberID = doc.data().member_id;
                // $("#assignedpropertydrop").html("<option>"+propertyName+"</option><option>No Property</option>");
                // $("#assignedunitdrop").html("<option>"+unitID+"</option><option>No Unit</option>");
                // $("#assignedpropertydrop").css("display","none");
                // $("#assignedunitdrop").css("display","none");
                $("#assignedproperty").val(doc.data().member_property);
                $("#assignedunit").val(doc.data().member_unit);
                $("#newusername").val(doc.data().member_name);
                $("#newemail").val(doc.data().member_email);
                $("#newcontact").val(doc.data().member_ContactNumber);
                $("#member_name").text(doc.data().member_name);
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
        if(memberName == "" && memberEmail == "")
        {
            propertydocRef.update({
                member_name: name,
                member_password:password,
                member_email: email,
                member_ContactNumber:memberContactNumber,
                member_property:propertyName,
                member_unit:unitID,
                member_id:memberID
            })
            .then(function() {
                alert("The data has been saved successfully!");
            })
        }
        else if(memberName == "" && memberContactNumber == "+6")
        {   
            propertydocRef.update({
                member_name: name,
                member_password:password,
                member_email: memberEmail,
                member_ContactNumber:contactNumber,
                member_property:propertyName,
                member_unit:unitID,
                member_id:memberID
            })
            .then(function() {
                alert("The data has been saved successfully!");
            })
        }
        else if(memberEmail == "" && memberContactNumber == "+6")
        {
            alert("Please fill in at least one field!");
            // propertydocRef.update({
            //     member_name: memberName,
            //     member_password:password,
            //     member_email: email,
            //     member_ContactNumber:contactNumber,
            //     member_property:propertyName,
            //     member_unit:unitID,
            //     member_id:memberID
            // })
            // .then(function() {
            //     alert("The data has been saved successfully!");
            // })
        }
        else
        {
            propertydocRef.update({
                member_name: name,
                member_password:password,
                member_email: memberEmail,
                member_ContactNumber:memberContactNumber,
                member_property:propertyName,
                member_unit:unitID,
                member_id:memberID
            })
            .then(function() {
                alert("The data has been saved successfully!");
            })
        }
    }
    else if(memberEmail == "")
    {
        if(memberName == "" && memberEmail == "")
        {
            propertydocRef.update({
                member_name: name,
                member_password:password,
                member_email: email,
                member_ContactNumber:memberContactNumber,
                member_property:propertyName,
                member_unit:unitID,
                member_id:memberID
            })
            .then(function() {
                alert("The data has been saved successfully!");
            })
        }
        else if(memberName == "" && memberContactNumber == "+6")
        {   
            alert("Please fill in at least one field!");
            // propertydocRef.update({
            //     member_name: name,
            //     member_password:password,
            //     member_email: memberEmail,
            //     member_ContactNumber:contactNumber,
            //     member_property:propertyName,
            //     member_unit:unitID,
            //     member_id:memberID
            // })
            // .then(function() {
            //     alert("The data has been saved successfully!");
            // })
        }
        else if(memberEmail == "" && memberContactNumber == "+6")
        {
            propertydocRef.update({
                member_name: memberName,
                member_password:password,
                member_email: email,
                member_ContactNumber:contactNumber,
                member_property:propertyName,
                member_unit:unitID,
                member_id:memberID
            })
            .then(function() {
                alert("The data has been saved successfully!");
            })
        }
        else
        {
            propertydocRef.update({
                member_name: memberName,
                member_password:password,
                member_email: email,
                member_ContactNumber:memberContactNumber,
                member_property:propertyName,
                member_unit:unitID,
                member_id:memberID
            })
            .then(function() {
                alert("The data has been saved successfully!");
            })
        }
    }
    else if(memberContactNumber == "+6")
    {
        if(memberName == "" && memberEmail == "")
        {
            alert("Please fill in at least one field!");
            // propertydocRef.update({
            //     member_name: name,
            //     member_password:password,
            //     member_email: email,
            //     member_ContactNumber:memberContactNumber,
            //     member_property:propertyName,
            //     member_unit:unitID,
            //     member_id:memberID
            // })
            // .then(function() {
            //     alert("The data has been saved successfully!");
            // })
        }
        else if(memberName == "" && memberContactNumber == "+6")
        {   
            propertydocRef.update({
                member_name: name,
                member_password:password,
                member_email: memberEmail,
                member_ContactNumber:contactNumber,
                member_property:propertyName,
                member_unit:unitID,
                member_id:memberID
            })
            .then(function() {
                alert("The data has been saved successfully!");
            })
        }
        else if(memberEmail == "" && memberContactNumber == "+6")
        {
            propertydocRef.update({
                member_name: memberName,
                member_password:password,
                member_email: email,
                member_ContactNumber:contactNumber,
                member_property:propertyName,
                member_unit:unitID,
                member_id:memberID
            })
            .then(function() {
                alert("The data has been saved successfully!");
            })
        }
        else
        {
            propertydocRef.update({
                member_name: memberName,
                member_password:password,
                member_email: memberEmail,
                member_ContactNumber:contactNumber,
                member_property:propertyName,
                member_unit:unitID,
                member_id:memberID
            })
            .then(function() {
                alert("The data has been saved successfully!");
            })
        }
    }
    else if(memberName !="" && memberEmail != "" && memberContactNumber != "")
        {
            propertydocRef.update({
                member_name: memberName,
                member_password:password,
                member_email: memberEmail,
                member_ContactNumber:memberContactNumber,
                member_property:propertyName,
                member_unit:unitID,
                member_id:memberID
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

            $("#newusername").prop('disabled', true);
            $("#newemail").prop('disabled', true);
            $("#newcontact").prop('disabled', true);
            $("#SaveUser").prop('disabled', true);
            $("#CancelUser").prop('disabled', true);
        }
        else {
            // doc.data() will be undefined in this case
            console.log("No such document!");
        }
    });
}

function UpdateProperty()
{
//     $("#assignedpropertydrop").css("display","block");
//     $("#assignedunitdrop").css("display","block");
//     $("#assignedproperty").css("display","none");
//     $("#assignedunit").css("display","none");
    var assignedproperty = $("#assignedpropertydrop option:selected").val();
    var assignedunit = $("#assignedunitdrop option:selected").val();
    console.log(assignedproperty);
    if(assignedproperty == "")
    {
        propertydocRef.update({
            member_name: name,
            member_email: email,
            member_ContactNumber:contactNumber,
            member_property:propertyName,
            member_unit:assignedunit
        })
        .then(function() {
            alert("The data has been saved successfully!");
        })
    }
    else if(assignedunit == "")
    {
        propertydocRef.update({
            member_name: name,
            member_email: email,
            member_ContactNumber:contactNumber,
            member_property:assignedproperty,
            member_unit:unitID
        })
        .then(function() {
            alert("The data has been saved successfully!");
        })
    }
    else if(assignedproperty != "" && assignedunit != "")
    {
        propertydocRef.update({
            member_name: name,
            member_email: email,
            member_ContactNumber:contactNumber,
            member_property:assignedproperty,
            member_unit:assignedunit
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
            property = doc.data().member_property;
            unit = doc.data().member_unit;

            $("#assignedproperty").val(doc.data().member_property);
            $("#assignedunit").val(doc.data().member_unit);
            $("#newusername").val(name);
            $("#newemail").val(email);
            $("#newcontact").val(contactNumber);

            $("#SaveProperty").prop('disabled', true);
            $("#CancelProperty").prop('disabled', true);
            $("#noedit").show();
            $("#edit").hide();
        }
        else {
            // doc.data() will be undefined in this case
            console.log("No such document!");
        }
    });
}