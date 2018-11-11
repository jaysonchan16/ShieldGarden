var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var unitID = sessionStorage.getItem("unitID");
var propertyName = sessionStorage.getItem("propertyName");
var findEmail = sessionStorage.getItem("findEmail");
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
var userEmail;
var memberRef;
var propertyMemberID;
var propertydocRefID;

$(document).ready(function(){
    loadDetails();
    
    $("#mainPage").off('click').on('click', function(){
        window.location = 'ManageUser.html';
    }); 

    $("#EditUser").off('click').on('click', function(){
        $("#newusername").val("");
       // $("#emaildiv").css("display","none");
       // $("#newemail").val("");
        $("#newcontact").val("");
        $("#newpassword").val("");
        $("#newemail").css("background-color","lightgrey");
        $("#newusername").prop('disabled', false);
       // $("#newemail").prop('disabled', false);
        $("#newcontact").prop('disabled', false);
        $("#contactSelect").prop('disabled', false);
        $("#newpassword").prop('disabled',false);
        $("#userbutton").show();
        $("#newcontactdiv").hide();
        $("#displayPassword").show();
        $("#countrySeparator").show();
        $("#DeleteUser").css("display","none");
        // $("#SaveUser").prop('disabled', false);
        // $("#CancelUser").prop('disabled', false);
    });

    $("#EditProperty").off('click').on('click', function(){
        // $("#assignedproperty").val("");
        // $("#assignedunit").val("");

        // $("#assignedproperty").prop('disabled', false);
        // $("#assignedunit").prop('disabled', false);
        $("#DeleteUser").css("display","none");
        $("#assignedpropertydrop").html("<option>"+propertyName+"</option><option>No Property</option>");
        // $("#SaveProperty").prop('disabled', false);
        // $("#CancelProperty").prop('disabled', false);
        $("#buttonProperty").show();
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
        $("#DeleteUser").css("display","block");
        $("#newusername").prop('disabled', true);
        $("#newemail").prop('disabled', true);
        $("#newemail").css("background-color","white");
        $("#newcontact").prop('disabled', true);
        $("#contactSelect").prop('disabled', true);
        $("#newpassword").prop('disabled',true);
        $("#userbutton").hide();
        $("#newcontactdiv").show();
        $("#displayPassword").hide();
        $("#countrySeparator").hide();
        // $("#SaveUser").prop('disabled', true);
        // $("#CancelUser").prop('disabled', true);
    });

    $("#CancelProperty").off('click').on('click', function(){
        $("#assignedproperty").val(currentproperty);
        $("#assignedunit").val(currentunit);
        $("#DeleteUser").css("display","block");
        // $("#assignedproperty").prop('disabled', true);
        // $("#assignedunit").prop('disabled', true);
        // $("#SaveProperty").prop('disabled', true);
        // $("#CancelProperty").prop('disabled', true);
        $("#buttonProperty").hide();
        $("#noedit").show();
        $("#edit").hide();
    });

    $("#DeleteUser").off('click').on('click', function(){
        deleteUser();
    });

    $("#deleteButton").off('click').on('click', function(){
        window.location = 'ManageUser.html';
    });
});

function loadDetails()
{
    $("#wait").css("display", "block");
    firebase.auth().onAuthStateChanged(function(user) {
    if (!user) {
        window.location = 'login.html';
        }
        $('#userprofile').html(user.email);
        userEmail = user.email;
        var propertyName = db.collection("properties").doc(propertyID).collection("units");

        propertydocRef = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members");

        memberRef = db.collection("properties").doc(propertyID).collection("property_members");

        memberRef.get().then(function(querySnapshot){
            querySnapshot.forEach(function(query){
                propertyMemberID = query.id;
            });
                propertyName.get().then(function(querySnapshot){
                    querySnapshot.forEach(function(snap){
                        $("#assignedunitdrop").append("<option>"+snap.id+"</option>");
                    });

                    propertydocRef.get().then(function(querySnapshot){
                        querySnapshot.forEach(function(doc){

                        if(findEmail == doc.data().member_email)
                        {
                            propertydocRefID = doc.id;
                            name = doc.data().member_name;
                            email = doc.data().member_email;
                            contactNumber = doc.data().member_number;

                            currentproperty = doc.data().member_property;
                            currentunit = doc.data().member_unit;
                            password = doc.data().member_password;
                            memberID = doc.data().member_uid;
                            $("#assignedproperty").val(doc.data().member_property);
                            $("#assignedunit").val(doc.data().member_unit);
                            $("#newusername").val(doc.data().member_name);
                            $("#newemail").val(doc.data().member_email);
                            $("#newemail").css("background-color","white");
                            $("#DeleteUser").css("display","block");
                            $("#newcontactdiv").val(doc.data().member_number);
                            $("#member_name").text(doc.data().member_name);
                        }
                            $("#wait").css("display", "none");
                    });
            });
        });
    }).catch(function(error) {
        $("#modalTitle").html("Error Message");
        $("#message").html('Cannot find in database!');
        $("#emaildiv").css("display","block");
        $("#newusername").prop('disabled', true);
        $("#newcontactdiv").prop('disabled', true);
        $("#contactSelect").prop('disabled', true);
        $("#userbutton").hide();
        $("#newcontactdiv").show();
        $("#countrySeparator").hide();
        $("#DeleteUser").css("display","block");
        $("#wait").css("display", "none");
        $("#newemail").css("background-color","white");
        $("#messageModal").modal();
    });
});
}

function UpdateUser()
{
     $("#wait").css("display", "block");

    var memberName = $("#newusername").val();
    var memberEmail = $("#newemail").val();
    var contactNum = $("#newcontact").val();
    var selectcontact = $("#contactSelect option:selected").val();
    var memberContactNumber = selectcontact + contactNum;
    var memberPassword = $("#newpassword").val();

    var checked = memberEmail.includes("@");
    var userRef = db.collection("users");
    var error = 0;
    var propertyMemberRef = db.collection("properties").doc(propertyID).collection("property_members").doc(propertyMemberID);
    var userUpdateRef = db.collection("users").doc(memberID);
    var propertyMemberIDRef =  propertydocRef = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members").doc(propertydocRefID);

    // userRef.get().then(function(querySnapshot) {
    //     querySnapshot.forEach(function(doc) {
            //console.log(doc.data())
    //         if(memberName == doc.data().name)
    //         {
    //             alert("This name has been used!")
    //             error = 1;
    //             $("#wait").css("display", "none");
    //         }
    //         else if(memberEmail == doc.data().email)
    //         {
    //             error = 1;
    //             $("#wait").css("display", "none");
    //         }
    //         else if(!checked)
    //         {
    //             alert("Invalid Email!")
    //             error = 1;
    //             $("#wait").css("display", "none");
    //         }
    //         else
    //         {
    //             error = 0;
    //         }
    //     });

    // if(error == 0)
    // {    
            if(memberName == "")
            {
                if(memberName == "" && memberEmail == "")
                {
                    if(contactNum == "")
                    {
                        $("#modalTitle").html("Error Message");
                        $("#message").html('Please change at least one field!');
                        $("#messageModal").modal();
                    }
                    else
                    {
                        propertyMemberIDRef.update({
                            member_name: name,
                            //member_password:password,
                            member_email: email,
                            member_number:memberContactNumber,
                            member_property:propertyName,
                            member_unit:unitID,
                            member_uid:memberID
                        })
                        .then(function() {
                            propertyMemberRef.update({
                                "p_member_name": name,
                                "p_member_email": email,
                                "p_member_number":memberContactNumber,
                                "p_member_property":propertyName,
                                "p_member_unit_id":unitID,
                            }).then(function() {
                                userUpdateRef.update({
                                    "name": name,
                                    "email": email,
                                    "phone_number":memberContactNumber,
                                    "unit_id":unitID
                                }).then(function() {
                                    $("#modalTitle").html("Manage User");
                                    $("#message").html('The data has been saved successfully!');
                                    $("#emaildiv").css("display","block");
                                    $("#newemail").css("background-color","white");
                                    $("#newusername").prop('disabled', true);
                                    $("#emaildiv").css("display","block");
                                    $("#newcontactdiv").prop('disabled', true);
                                    $("#contactSelect").prop('disabled', true);
                                    $("#userbutton").hide();
                                    $("#newcontactdiv").show();
                                    $("#DeleteUser").css("display","block");
                                    $("#countrySeparator").hide();
                                    $("#wait").css("display", "none");
                                    $("#messageModal").modal();
                                }).catch(function(error) {
                                    $("#modalTitle").html("Error Message");
                                    $("#message").html('Error for updating data!');
                                    $("#emaildiv").css("display","block");
                                    $("#newemail").css("background-color","white");
                                    $("#newusername").prop('disabled', true);
                                    $("#emaildiv").css("display","block");
                                    $("#newcontactdiv").prop('disabled', true);
                                    $("#contactSelect").prop('disabled', true);
                                    $("#userbutton").hide();
                                    $("#newcontactdiv").show();
                                    $("#DeleteUser").css("display","block");
                                    $("#countrySeparator").hide();
                                    $("#wait").css("display", "none");
                                    $("#messageModal").modal();
                                });
                            }).catch(function(error) {
                                $("#modalTitle").html("Error Message");
                                $("#message").html('Error for updating data!');
                                $("#emaildiv").css("display","block");
                                $("#newusername").prop('disabled', true);
                                $("#emaildiv").css("display","block");
                                $("#newcontactdiv").prop('disabled', true);
                                $("#contactSelect").prop('disabled', true);
                                $("#userbutton").hide();
                                $("#newcontactdiv").show();
                                $("#DeleteUser").css("display","block");
                                $("#newemail").css("background-color","white");
                                $("#countrySeparator").hide();
                                $("#wait").css("display", "none");
                                $("#messageModal").modal();
                            });
                        }).catch(function(error) {
                            $("#modalTitle").html("Error Message");
                            $("#message").html('Error for updating data!');
                            $("#emaildiv").css("display","block");
                            $("#newusername").prop('disabled', true);
                            $("#emaildiv").css("display","block");
                            $("#newcontactdiv").prop('disabled', true);
                            $("#contactSelect").prop('disabled', true);
                            $("#userbutton").hide();
                            $("#newcontactdiv").show();
                            $("#DeleteUser").css("display","block");
                            $("#newemail").css("background-color","white");
                            $("#countrySeparator").hide();
                            $("#wait").css("display", "none");
                            $("#messageModal").modal();
                        });
                    }
                }
                else if(memberName == "" && contactNum == "")
                {   
                    propertyMemberIDRef.update({
                        member_name: name,
                        ////member_password:password,
                        member_email: memberEmail,
                        member_number:contactNumber,
                        member_property:propertyName,
                        member_unit:unitID,
                        member_uid:memberID
                    })
                    .then(function() {
                        propertyMemberRef.update({
                            "p_member_name": name,
                            "p_member_email": memberEmail,
                            "p_member_number":contactNumber,
                            "p_member_property":propertyName,
                            "p_member_unit_id":unitID,
                        }).then(function() {
                            userUpdateRef.update({
                                "name": name,
                                "email": memberEmail,
                                "phone_number":contactNumber,
                                "unit_id":unitID
                            }).then(function() {
                                // firebase.auth()
                                // .signInWithEmailAndPassword(findEmail, memberPassword)
                                // .then(function(user) {
                                //     user.updateEmail(memberEmail)
                                    $("#modalTitle").html("Manage User");
                                    $("#message").html('The data has been saved successfully!');
                                    $("#newemail").css("background-color","white");
                                    $("#emaildiv").css("display","block");
                                    $("#DeleteUser").css("display","block");
                                    $("#newusername").prop('disabled', true);
                                    $("#emaildiv").css("display","block");
                                    $("#newcontactdiv").prop('disabled', true);
                                    $("#contactSelect").prop('disabled', true);
                                    $("#userbutton").hide();
                                    $("#newcontactdiv").show();
                                    $("#countrySeparator").hide();
                                    $("#wait").css("display", "none");
                                    $("#messageModal").modal();
                                // }).catch(function(error) {
                                //     alert("Cannot update!");
                                //     $("#wait").css("display", "none");
                            }).catch(function(error) {
                                $("#modalTitle").html("Error Message");
                                $("#message").html('Error for updating data!');
                                $("#emaildiv").css("display","block");
                                $("#newusername").prop('disabled', true);
                                $("#emaildiv").css("display","block");
                                $("#newemail").css("background-color","white");
                                $("#newcontactdiv").prop('disabled', true);
                                $("#contactSelect").prop('disabled', true);
                                $("#DeleteUser").css("display","block");
                                $("#userbutton").hide();
                                $("#newcontactdiv").show();
                                $("#countrySeparator").hide();
                                $("#wait").css("display", "none");
                                $("#messageModal").modal();
                            });
                        }).catch(function(error) {
                            $("#modalTitle").html("Error Message");
                            $("#message").html('Error for updating data!');
                            $("#emaildiv").css("display","block");
                            $("#newusername").prop('disabled', true);
                            $("#emaildiv").css("display","block");
                            $("#newemail").css("background-color","white");
                            $("#newcontactdiv").prop('disabled', true);
                            $("#DeleteUser").css("display","block");
                            $("#contactSelect").prop('disabled', true);
                            $("#userbutton").hide();
                            $("#newcontactdiv").show();
                            $("#countrySeparator").hide();
                            $("#wait").css("display", "none");
                            $("#messageModal").modal();
                        });
                    }).catch(function(error) {
                        $("#modalTitle").html("Error Message");
                        $("#message").html('Error for updating data!');
                        $("#emaildiv").css("display","block");
                        $("#newusername").prop('disabled', true);
                        $("#newemail").css("background-color","white");
                        $("#emaildiv").css("display","block");
                        $("#newcontactdiv").prop('disabled', true);
                        $("#contactSelect").prop('disabled', true);
                        $("#DeleteUser").css("display","block");
                        $("#userbutton").hide();
                        $("#newcontactdiv").show();
                        $("#countrySeparator").hide();
                        $("#wait").css("display", "none");
                        $("#messageModal").modal();
                    });
                    // });
                }
                else if(memberEmail == "" && contactNum == "")
                {
                    $("#modalTitle").html("Error Message");
                    $("#message").html('Please fill in at least one field!');
                    $("#emaildiv").css("display","block");
                    $("#newusername").prop('disabled', true);
                    $("#emaildiv").css("display","block");
                    $("#newcontactdiv").prop('disabled', true);
                    $("#DeleteUser").css("display","block");
                    $("#contactSelect").prop('disabled', true);
                    $("#userbutton").hide();
                    $("#newemail").css("background-color","white");
                    $("#newcontactdiv").show();
                    $("#countrySeparator").hide();
                    $("#wait").css("display", "none");
                    $("#messageModal").modal();
                }
                else
                {
                    propertyMemberIDRef.update({
                        member_name: name,
                        ////member_password:password,
                        member_email: memberEmail,
                        member_number:memberContactNumber,
                        member_property:propertyName,
                        member_unit:unitID,
                        member_uid:memberID
                    })
                     .then(function() {
                            propertyMemberRef.update({
                                "p_member_name": name,
                                "p_member_email": memberEmail,
                                "p_member_number":memberContactNumber,
                                "p_member_property":propertyName,
                                "p_member_unit_id":unitID,
                            }).then(function() {
                                userUpdateRef.update({
                                    "name": name,
                                    "email": memberEmail,
                                    "phone_number":memberContactNumber,
                                    "unit_id":unitID
                                }).then(function() {
                                    // firebase.auth()
                                    // .signInWithEmailAndPassword(findEmail, memberPassword)
                                    // .then(function(user) {
                                    //     user.updateEmail(memberEmail)
                                        $("#modalTitle").html("Manage User");
                                        $("#message").html('The data has been saved successfully!');
                                        $("#emaildiv").css("display","block");
                                        $("#newusername").prop('disabled', true);
                                        $("#DeleteUser").css("display","block");
                                        $("#emaildiv").css("display","block");
                                        $("#newemail").css("background-color","white");
                                        $("#newcontactdiv").prop('disabled', true);
                                        $("#contactSelect").prop('disabled', true);
                                        $("#userbutton").hide();
                                        $("#newcontactdiv").show();
                                        $("#countrySeparator").hide();
                                        $("#wait").css("display", "none");
                                        $("#messageModal").modal();
                                    // }).catch(function(error) {
                                    //     alert("Cannot update!");
                                    //     $("#wait").css("display", "none");
                                }).catch(function(error) {
                                    $("#modalTitle").html("Error Message");
                                    $("#message").html('Error for updating data!');
                                    $("#emaildiv").css("display","block");
                                    $("#newusername").prop('disabled', true);
                                    $("#emaildiv").css("display","block");
                                    $("#DeleteUser").css("display","block");
                                    $("#newcontactdiv").prop('disabled', true);
                                    $("#contactSelect").prop('disabled', true);
                                    $("#userbutton").hide();
                                    $("#newcontactdiv").show();
                                    $("#newemail").css("background-color","white");
                                    $("#countrySeparator").hide();
                                    $("#wait").css("display", "none");
                                    $("#messageModal").modal();
                                });
                            }).catch(function(error) {
                                $("#modalTitle").html("Error Message");
                                $("#message").html('Error for updating data!');
                                $("#emaildiv").css("display","block");
                                $("#newusername").prop('disabled', true);
                                $("#emaildiv").css("display","block");
                                $("#newcontactdiv").prop('disabled', true);
                                $("#DeleteUser").css("display","block");
                                $("#contactSelect").prop('disabled', true);
                                $("#userbutton").hide();
                                $("#newcontactdiv").show();
                                $("#countrySeparator").hide();
                                $("#newemail").css("background-color","white");
                                $("#wait").css("display", "none");
                                $("#messageModal").modal();
                            });
                        }).catch(function(error) {
                            $("#modalTitle").html("Error Message");
                            $("#message").html('Error for updating data!');
                            $("#emaildiv").css("display","block");
                            $("#DeleteUser").css("display","block");
                            $("#newusername").prop('disabled', true);
                            $("#emaildiv").css("display","block");
                            $("#newcontactdiv").prop('disabled', true);
                            $("#contactSelect").prop('disabled', true);
                            $("#userbutton").hide();
                            $("#newemail").css("background-color","white");
                            $("#newcontactdiv").show();
                            $("#countrySeparator").hide();
                            $("#wait").css("display", "none");
                            $("#messageModal").modal();
                    // });
                });
                }
            }
            else if(memberEmail == "")
            {
                if(memberName == "" && memberEmail == "")
                {
                    propertyMemberIDRef.update({
                        member_name: name,
                        ////member_password:password,
                        member_email: email,
                        member_number:memberContactNumber,
                        member_property:propertyName,
                        member_unit:unitID,
                        member_uid:memberID
                    })
                    .then(function() {
                        propertyMemberRef.update({
                            "p_member_name": name,
                            "p_member_email": email,
                            "p_member_number":memberContactNumber,
                            "p_member_property":propertyName,
                            "p_member_unit_id":unitID,
                        }).then(function() {
                            userUpdateRef.update({
                                "name": name,
                                "email": email,
                                "phone_number":memberContactNumber,
                                "unit_id":unitID
                            }).then(function() {
                                $("#modalTitle").html("Manage User");
                                $("#message").html('The data has been saved successfully!');
                                $("#newemail").css("background-color","white");
                                $("#emaildiv").css("display","block");
                                $("#newusername").prop('disabled', true);
                                $("#emaildiv").css("display","block");
                                $("#newcontactdiv").prop('disabled', true);
                                $("#DeleteUser").css("display","block");
                                $("#contactSelect").prop('disabled', true);
                                $("#userbutton").hide();
                                $("#newcontactdiv").show();
                                $("#countrySeparator").hide();
                                $("#wait").css("display", "none");
                                $("#messageModal").modal();
                            }).catch(function(error) {
                                $("#modalTitle").html("Error Message");
                                $("#message").html('Error for updating data!');
                                $("#newemail").css("background-color","white");
                                $("#emaildiv").css("display","block");
                                $("#newusername").prop('disabled', true);
                                $("#DeleteUser").css("display","block");
                                $("#emaildiv").css("display","block");
                                $("#newcontactdiv").prop('disabled', true);
                                $("#contactSelect").prop('disabled', true);
                                $("#userbutton").hide();
                                $("#newcontactdiv").show();
                                $("#countrySeparator").hide();
                                $("#wait").css("display", "none");
                                $("#messageModal").modal();
                            });
                        }).catch(function(error) {
                            $("#modalTitle").html("Error Message");
                            $("#message").html('Error for updating data!');
                            $("#emaildiv").css("display","block");
                            $("#DeleteUser").css("display","block");
                            $("#newusername").prop('disabled', true);
                            $("#emaildiv").css("display","block");
                            $("#newemail").css("background-color","white");
                            $("#newcontactdiv").prop('disabled', true);
                            $("#contactSelect").prop('disabled', true);
                            $("#userbutton").hide();
                            $("#newcontactdiv").show();
                            $("#countrySeparator").hide();
                            $("#wait").css("display", "none");
                            $("#messageModal").modal();
                        });
                    }).catch(function(error) {
                        $("#modalTitle").html("Error Message");
                        $("#message").html('Error for updating data!');
                        $("#emaildiv").css("display","block");
                        $("#newusername").prop('disabled', true);
                        $("#newemail").css("background-color","white");
                        $("#emaildiv").css("display","block");
                        $("#newcontactdiv").prop('disabled', true);
                        $("#contactSelect").prop('disabled', true);
                        $("#userbutton").hide();
                        $("#newcontactdiv").show();
                        $("#DeleteUser").css("display","block");
                        $("#countrySeparator").hide();
                        $("#wait").css("display", "none");
                        $("#messageModal").modal();
                    });
                }
                else if(memberName == "" && contactNum == "")
                {   
                    $("#modalTitle").html("Error Message");
                    $("#message").html('Please fill in at least one field!');
                    $("#newemail").css("background-color","white");
                    $("#emaildiv").css("display","block");
                    $("#DeleteUser").css("display","block");
                    $("#newusername").prop('disabled', true);
                    $("#emaildiv").css("display","block");
                    $("#newcontactdiv").prop('disabled', true);
                    $("#contactSelect").prop('disabled', true);
                    $("#userbutton").hide();
                    $("#newcontactdiv").show();
                    $("#countrySeparator").hide();
                    $("#wait").css("display", "none");
                    $("#messageModal").modal();
                }
                else if(memberEmail == "" && contactNum == "")
                {
                    propertyMemberIDRef.update({
                        member_name: memberName,
                        ////member_password:password,
                        member_email: email,
                        member_number:contactNumber,
                        member_property:propertyName,
                        member_unit:unitID,
                        member_uid:memberID
                    })
                    .then(function() {
                        propertyMemberRef.update({
                            "p_member_name": memberName,
                            "p_member_email": email,
                            "p_member_number":contactNumber,
                            "p_member_property":propertyName,
                            "p_member_unit_id":unitID,
                        }).then(function() {
                            userUpdateRef.update({
                                "name": memberName,
                                "email": email,
                                "phone_number":contactNumber,
                                "unit_id":unitID
                            }).then(function() {
                                $("#modalTitle").html("Manage User");
                                $("#message").html('The data has been saved successfully!');
                                $("#newemail").css("background-color","white");
                                $("#emaildiv").css("display","block");
                                $("#newusername").prop('disabled', true);
                                $("#emaildiv").css("display","block");
                                $("#newcontactdiv").prop('disabled', true);
                                $("#contactSelect").prop('disabled', true);
                                $("#DeleteUser").css("display","block");
                                $("#userbutton").hide();
                                $("#newcontactdiv").show();
                                $("#countrySeparator").hide();
                                $("#wait").css("display", "none");
                                $("#messageModal").modal();
                            }).catch(function(error) {
                                $("#modalTitle").html("Error Message");
                                $("#message").html('Error for updating data!');
                                $("#emaildiv").css("display","block");
                                $("#newemail").css("background-color","white");
                                $("#newusername").prop('disabled', true);
                                $("#emaildiv").css("display","block");
                                $("#DeleteUser").css("display","block");
                                $("#newcontactdiv").prop('disabled', true);
                                $("#contactSelect").prop('disabled', true);
                                $("#userbutton").hide();
                                $("#newcontactdiv").show();
                                $("#countrySeparator").hide();
                                $("#wait").css("display", "none");
                                $("#messageModal").modal();
                            });
                        }).catch(function(error) {
                            $("#modalTitle").html("Error Message");
                            $("#message").html('Error for updating data!');
                            $("#emaildiv").css("display","block");
                            $("#newusername").prop('disabled', true);
                            $("#DeleteUser").css("display","block");
                            $("#newemail").css("background-color","white");
                            $("#emaildiv").css("display","block");
                            $("#newcontactdiv").prop('disabled', true);
                            $("#contactSelect").prop('disabled', true);
                            $("#userbutton").hide();
                            $("#newcontactdiv").show();
                            $("#countrySeparator").hide();
                            $("#wait").css("display", "none");
                            $("#messageModal").modal();
                        });
                    }).catch(function(error) {
                        $("#modalTitle").html("Error Message");
                        $("#message").html('Error for updating data!');
                        $("#emaildiv").css("display","block");
                        $("#newusername").prop('disabled', true);
                        $("#newemail").css("background-color","white");
                        $("#emaildiv").css("display","block");
                        $("#DeleteUser").css("display","block");
                        $("#newcontactdiv").prop('disabled', true);
                        $("#contactSelect").prop('disabled', true);
                        $("#userbutton").hide();
                        $("#newcontactdiv").show();
                        $("#countrySeparator").hide();
                        $("#wait").css("display", "none");
                        $("#messageModal").modal();
                    });
                }
                else
                {
                    propertyMemberIDRef.update({
                        member_name: memberName,
                        ////member_password:password,
                        member_email: email,
                        member_number:memberContactNumber,
                        member_property:propertyName,
                        member_unit:unitID,
                        member_uid:memberID
                    })
                    .then(function() {
                        propertyMemberRef.update({
                            "p_member_name": memberName,
                            "p_member_email": email,
                            "p_member_number":memberContactNumber,
                            "p_member_property":propertyName,
                            "p_member_unit_id":unitID,
                        }).then(function() {
                            userUpdateRef.update({
                                "name": memberName,
                                "email": email,
                                "phone_number":memberContactNumber,
                                "unit_id":unitID
                            }).then(function() {
                                $("#modalTitle").html("Manage User");
                                $("#message").html('The data has been saved successfully!');
                                $("#emaildiv").css("display","block");
                                $("#newusername").prop('disabled', true);
                                $("#newemail").css("background-color","white");
                                $("#emaildiv").css("display","block");
                                $("#DeleteUser").css("display","block");
                                $("#newcontactdiv").prop('disabled', true);
                                $("#contactSelect").prop('disabled', true);
                                $("#userbutton").hide();
                                $("#newcontactdiv").show();
                                $("#countrySeparator").hide();
                                $("#wait").css("display", "none");
                                $("#messageModal").modal();
                            }).catch(function(error) {
                                $("#modalTitle").html("Error Message");
                                $("#message").html('Error for updating data!');
                                $("#emaildiv").css("display","block");
                                $("#DeleteUser").css("display","block");
                                $("#newusername").prop('disabled', true);
                                $("#newemail").css("background-color","white");
                                $("#emaildiv").css("display","block");
                                $("#newcontactdiv").prop('disabled', true);
                                $("#contactSelect").prop('disabled', true);
                                $("#userbutton").hide();
                                $("#newcontactdiv").show();
                                $("#countrySeparator").hide();
                                $("#wait").css("display", "none");
                                $("#messageModal").modal();
                            });
                        }).catch(function(error) {
                            $("#modalTitle").html("Error Message");
                            $("#message").html('Error for updating data!');
                            $("#emaildiv").css("display","block");
                            $("#newusername").prop('disabled', true);
                            $("#newemail").css("background-color","white");
                            $("#emaildiv").css("display","block");
                            $("#newcontactdiv").prop('disabled', true);
                            $("#contactSelect").prop('disabled', true);
                            $("#DeleteUser").css("display","block");
                            $("#userbutton").hide();
                            $("#newcontactdiv").show();
                            $("#countrySeparator").hide();
                            $("#wait").css("display", "none");
                            $("#messageModal").modal();
                        });
                    }).catch(function(error) {
                        $("#modalTitle").html("Error Message");
                        $("#message").html('Error for updating data!');
                        $("#emaildiv").css("display","block");
                        $("#newusername").prop('disabled', true);
                        $("#emaildiv").css("display","block");
                        $("#newcontactdiv").prop('disabled', true);
                        $("#newemail").css("background-color","white");
                        $("#contactSelect").prop('disabled', true);
                        $("#DeleteUser").css("display","block");
                        $("#userbutton").hide();
                        $("#newcontactdiv").show();
                        $("#countrySeparator").hide();
                        $("#wait").css("display", "none");
                        $("#messageModal").modal();
                    });
                }
            }
            else if(contactNum == "")
            {
                if(memberName == "" && memberEmail == "")
                {
                    $("#modalTitle").html("Error Message");
                    $("#message").html('Please fill in at least one field!');
                    $("#emaildiv").css("display","block");
                    $("#newusername").prop('disabled', true);
                    $("#emaildiv").css("display","block");
                    $("#newemail").css("background-color","white");
                    $("#newcontactdiv").prop('disabled', true);
                    $("#contactSelect").prop('disabled', true);
                    $("#DeleteUser").css("display","block");
                    $("#userbutton").hide();
                    $("#newcontactdiv").show();
                    $("#countrySeparator").hide();
                    $("#wait").css("display", "none");
                    $("#messageModal").modal();
                }
                else if(memberName == "" && contactNum == "")
                {   
                    propertyMemberIDRef.update({
                        member_name: name,
                        //member_password:password,
                        member_email: memberEmail,
                        member_number:contactNumber,
                        member_property:propertyName,
                        member_unit:unitID,
                        member_uid:memberID
                    })
                    .then(function() {
                        propertyMemberRef.update({
                            "p_member_name": name,
                            "p_member_email": memberEmail,
                            "p_member_number":memberContactNumber,
                            "p_member_property":propertyName,
                            "p_member_unit_id":unitID,
                        }).then(function() {
                            userUpdateRef.update({
                                "name": name,
                                "email": memberEmail,
                                "phone_number":memberContactNumber,
                                "unit_id":unitID
                            }).then(function() {
                                // firebase.auth()
                                // .signInWithEmailAndPassword(findEmail, memberPassword)
                                // .then(function(user) {
                                //     user.updateEmail(memberEmail)
                                    $("#modalTitle").html("Manage User");
                                    $("#message").html('The data has been saved successfully!');
                                    $("#emaildiv").css("display","block");
                                    $("#newemail").css("background-color","white");
                                    $("#newusername").prop('disabled', true);
                                    $("#emaildiv").css("display","block");
                                    $("#newcontactdiv").prop('disabled', true);
                                    $("#DeleteUser").css("display","block");
                                    $("#contactSelect").prop('disabled', true);
                                    $("#userbutton").hide();
                                    $("#newcontactdiv").show();
                                    $("#countrySeparator").hide();
                                    $("#wait").css("display", "none");
                                    $("#messageModal").modal();
                                // }).catch(function(error) {
                                //     alert("Cannot update!");
                                //     $("#wait").css("display", "none");
                            }).catch(function(error) {
                                $("#modalTitle").html("Error Message");
                                $("#message").html('Error for updating data!');
                                $("#emaildiv").css("display","block");
                                $("#newusername").prop('disabled', true);
                                $("#newemail").css("background-color","white");
                                $("#emaildiv").css("display","block");
                                $("#DeleteUser").css("display","block");
                                $("#newcontactdiv").prop('disabled', true);
                                $("#contactSelect").prop('disabled', true);
                                $("#userbutton").hide();
                                $("#newcontactdiv").show();
                                $("#countrySeparator").hide();
                                $("#wait").css("display", "none");
                                $("#messageModal").modal();
                            });
                        }).catch(function(error) {
                            $("#modalTitle").html("Error Message");
                            $("#message").html('Error for updating data!');
                            $("#emaildiv").css("display","block");
                            $("#newemail").css("background-color","white");
                            $("#newusername").prop('disabled', true);
                            $("#emaildiv").css("display","block");
                            $("#newcontactdiv").prop('disabled', true);
                            $("#contactSelect").prop('disabled', true);
                            $("#userbutton").hide();
                            $("#newcontactdiv").show();
                            $("#countrySeparator").hide();
                            $("#wait").css("display", "none");
                            $("#messageModal").modal();
                        });
                    }).catch(function(error) {
                        $("#modalTitle").html("Error Message");
                        $("#message").html('Error for updating data!');
                        $("#emaildiv").css("display","block");
                        $("#newemail").css("background-color","white");
                        $("#newusername").prop('disabled', true);
                        $("#emaildiv").css("display","block");
                        $("#newcontactdiv").prop('disabled', true);
                        $("#DeleteUser").css("display","block");
                        $("#contactSelect").prop('disabled', true);
                        $("#userbutton").hide();
                        $("#newcontactdiv").show();
                        $("#countrySeparator").hide();
                        $("#wait").css("display", "none");
                        $("#messageModal").modal();
                // });
            });
        }
        else if(memberEmail == "" && contactNum == "")
        {
            propertyMemberIDRef.update({
                member_name: memberName,
                //member_password:password,
                member_email: email,
                member_number:contactNumber,
                member_property:propertyName,
                member_unit:unitID,
                member_uid:memberID
            })
            .then(function() {
                propertyMemberRef.update({
                    "p_member_name": memberName,
                    "p_member_email": email,
                    "p_member_number":contactNumber,
                    "p_member_property":propertyName,
                    "p_member_unit_id":unitID,
                }).then(function() {
                    userUpdateRef.update({
                        "name": memberName,
                        "email": email,
                        "phone_number":contactNumber,
                        "unit_id":unitID
                    }).then(function() {
                        $("#modalTitle").html("Manage User");
                        $("#message").html('The data has been saved successfully!');
                        $("#emaildiv").css("display","block");
                        $("#newusername").prop('disabled', true);
                        $("#emaildiv").css("display","block");
                        $("#newcontactdiv").prop('disabled', true);
                        $("#DeleteUser").css("display","block");
                        $("#newemail").css("background-color","white");
                        $("#contactSelect").prop('disabled', true);
                        $("#userbutton").hide();
                        $("#newcontactdiv").show();
                        $("#countrySeparator").hide();
                        $("#wait").css("display", "none");
                        $("#messageModal").modal();
                    }).catch(function(error) {
                        $("#modalTitle").html("Error Message");
                        $("#message").html('Error for updating data!');
                        $("#emaildiv").css("display","block");
                        $("#newusername").prop('disabled', true);
                        $("#DeleteUser").css("display","block");
                        $("#emaildiv").css("display","block");
                        $("#newemail").css("background-color","white");
                        $("#newcontactdiv").prop('disabled', true);
                        $("#contactSelect").prop('disabled', true);
                        $("#userbutton").hide();
                        $("#newcontactdiv").show();
                        $("#countrySeparator").hide();
                        $("#wait").css("display", "none");
                        $("#messageModal").modal();
                    });
                }).catch(function(error) {
                    $("#modalTitle").html("Error Message");
                    $("#message").html('Error for updating data!');
                    $("#newusername").prop('disabled', true);
                    $("#emaildiv").css("display","block");
                    $("#newcontactdiv").prop('disabled', true);
                    $("#contactSelect").prop('disabled', true);
                    $("#DeleteUser").css("display","block");
                    $("#newemail").css("background-color","white");
                    $("#userbutton").hide();
                    $("#newcontactdiv").show();
                    $("#countrySeparator").hide();
                    $("#wait").css("display", "none");
                    $("#messageModal").modal();
                });
            }).catch(function(error) {
                $("#modalTitle").html("Error Message");
                $("#message").html('Error for updating data!');
                $("#newusername").prop('disabled', true);
                $("#emaildiv").css("display","block");
                $("#DeleteUser").css("display","block");
                $("#newcontactdiv").prop('disabled', true);
                $("#newemail").css("background-color","white");
                $("#contactSelect").prop('disabled', true);
                $("#userbutton").hide();
                $("#newcontactdiv").show();
                $("#countrySeparator").hide();
                $("#wait").css("display", "none");
                $("#messageModal").modal();
            });
        }
        else
        {
            propertyMemberIDRef.update({
                member_name: memberName,
                //member_password:password,
                member_email: memberEmail,
                member_number:contactNumber,
                member_property:propertyName,
                member_unit:unitID,
                member_uid:memberID
            })
            .then(function() {
                propertyMemberRef.update({
                    "p_member_name": memberName,
                    "p_member_email": memberEmail,
                    "p_member_number":contactNumber,
                    "p_member_property":propertyName,
                    "p_member_unit_id":unitID,
                }).then(function() {
                    userUpdateRef.update({
                        "name": memberName,
                        "email": memberEmail,
                        "phone_number":contactNumber,
                        "unit_id":unitID
                    }).then(function() {
                        // firebase.auth()
                        // .signInWithEmailAndPassword(findEmail, memberPassword)
                        // .then(function(user) {
                        //     user.updateEmail(memberEmail)
                            $("#modalTitle").html("Manage User");
                            $("#message").html('The data has been saved successfully!');
                            $("#emaildiv").css("display","block");
                            $("#newusername").prop('disabled', true);
                            $("#emaildiv").css("display","block");
                            $("#DeleteUser").css("display","block");
                            $("#newcontactdiv").prop('disabled', true);
                            $("#contactSelect").prop('disabled', true);
                            $("#userbutton").hide();
                            $("#newcontactdiv").show();
                            $("#countrySeparator").hide();
                            $("#newemail").css("background-color","white");
                            $("#wait").css("display", "none");
                            $("#messageModal").modal();
                        // }).catch(function(error) {
                        //     alert("Cannot update!");
                        //     $("#wait").css("display", "none");
                    }).catch(function(error) {
                        $("#modalTitle").html("Error Message");
                        $("#message").html('Error for updating data!');
                        $("#emaildiv").css("display","block");
                        $("#newusername").prop('disabled', true);
                        $("#emaildiv").css("display","block");
                        $("#DeleteUser").css("display","block");
                        $("#newcontactdiv").prop('disabled', true);
                        $("#contactSelect").prop('disabled', true);
                        $("#userbutton").hide();
                        $("#newcontactdiv").show();
                        $("#newemail").css("background-color","white");
                        $("#countrySeparator").hide();
                        $("#wait").css("display", "none");
                        $("#messageModal").modal();
                    });
                }).catch(function(error) {
                    $("#modalTitle").html("Error Message");
                    $("#message").html('Error for updating data!');
                    $("#emaildiv").css("display","block");
                    $("#newusername").prop('disabled', true);
                    $("#emaildiv").css("display","block");
                    $("#newcontactdiv").prop('disabled', true);
                    $("#contactSelect").prop('disabled', true);
                    $("#DeleteUser").css("display","block");
                    $("#userbutton").hide();
                    $("#newcontactdiv").show();
                    $("#countrySeparator").hide();
                    $("#newemail").css("background-color","white");
                    $("#wait").css("display", "none");
                    $("#messageModal").modal();
                });
            }).catch(function(error) {
                $("#modalTitle").html("Error Message");
                $("#message").html('Error for updating data!');
                $("#emaildiv").css("display","block");
                $("#newusername").prop('disabled', true);
                $("#emaildiv").css("display","block");
                $("#newcontactdiv").prop('disabled', true);
                $("#contactSelect").prop('disabled', true);
                $("#DeleteUser").css("display","block");
                $("#userbutton").hide();
                $("#newcontactdiv").show();
                $("#newemail").css("background-color","white");
                $("#countrySeparator").hide();
                $("#wait").css("display", "none");
                $("#messageModal").modal();
                });
            // });
        }
    }
    else if(memberName !="" && memberEmail != "" && contactNum != "")
        {
            propertyMemberIDRef.update({
                member_name: memberName,
                //member_password:password,
                member_email: memberEmail,
                member_number:memberContactNumber,
                member_property:propertyName,
                member_unit:unitID,
                member_uid:memberID
            })
            .then(function() {
                propertyMemberRef.update({
                    "p_member_name": memberName,
                    "p_member_email": memberEmail,
                    "p_member_number":memberContactNumber,
                    "p_member_property":propertyName,
                    "p_member_unit_id":unitID,
                }).then(function() {
                    userUpdateRef.update({
                        "name": memberName,
                        "email": memberEmail,
                        "phone_number":memberContactNumber,
                        "unit_id":unitID
                    }).then(function() {
                        // firebase.auth()
                        // .signInWithEmailAndPassword(findEmail, memberPassword)
                        // .then(function(user) {
                        //     user.updateEmail(memberEmail)
                            $("#modalTitle").html("Manage User");
                            $("#message").html('The data has been saved successfully!');
                            $("#emaildiv").css("display","block");
                            $("#newusername").prop('disabled', true);
                            $("#newemail").css("background-color","white");
                            $("#DeleteUser").css("display","block");
                            $("#emaildiv").css("display","block");
                            $("#newcontactdiv").prop('disabled', true);
                            $("#contactSelect").prop('disabled', true);
                            $("#userbutton").hide();
                            $("#newcontactdiv").show();
                            $("#countrySeparator").hide();
                            $("#wait").css("display", "none");
                            $("#messageModal").modal();
                        // }).catch(function(error) {
                        //     alert("Cannot update!");
                        //     $("#wait").css("display", "none");
                    }).catch(function(error) {
                        $("#modalTitle").html("Error Message");
                        $("#message").html('Error for updating data!');
                        $("#emaildiv").css("display","block");
                        $("#newusername").prop('disabled', true);
                        $("#newemail").css("background-color","white");
                        $("#emaildiv").css("display","block");
                        $("#DeleteUser").css("display","block");
                        $("#newcontactdiv").prop('disabled', true);
                        $("#contactSelect").prop('disabled', true);
                        $("#userbutton").hide();
                        $("#newcontactdiv").show();
                        $("#countrySeparator").hide();
                        $("#wait").css("display", "none");
                        $("#messageModal").modal();
                    });
                }).catch(function(error) {
                    $("#modalTitle").html("Error Message");
                    $("#message").html('Error for updating data!');
                    $("#emaildiv").css("display","block");
                    $("#newusername").prop('disabled', true);
                    $("#emaildiv").css("display","block");
                    $("#newemail").css("background-color","white");
                    $("#newcontactdiv").prop('disabled', true);
                    $("#DeleteUser").css("display","block");
                    $("#contactSelect").prop('disabled', true);
                    $("#userbutton").hide();
                    $("#newcontactdiv").show();
                    $("#countrySeparator").hide();
                    $("#wait").css("display", "none");
                    $("#messageModal").modal();
                });
            }).catch(function(error) {
                $("#modalTitle").html("Error Message");
                $("#message").html('Error for updating data!');
                $("#emaildiv").css("display","block");
                $("#newusername").prop('disabled', true);
                $("#emaildiv").css("display","block");
                $("#newcontactdiv").prop('disabled', true);
                $("#newemail").css("background-color","white");
                $("#DeleteUser").css("display","block");
                $("#contactSelect").prop('disabled', true);
                $("#userbutton").hide();
                $("#newcontactdiv").show();
                $("#countrySeparator").hide();
                $("#wait").css("display", "none");
                $("#messageModal").modal();
                });
        }
        else
        {
            $("#emaildiv").css("display","block");
            $("#newusername").prop('disabled', true);
            $("#emaildiv").css("display","block");
            $("#newcontact").prop('disabled', true);
            $("#DeleteUser").css("display","block");
            $("#newemail").css("background-color","white");
            $("#contactSelect").prop('disabled', true);
            $("#userbutton").hide();
            $("#newcontactdiv").show();
            $("#countrySeparator").hide();
            $("#modalTitle").html("Error Message");
            $("#message").html('Please fill in at least one field!');
            $("#wait").css("display", "none");
            $("#messageModal").modal();
        }

        propertyMemberIDRef.get().then(function(doc) {
                if (doc.exists) {
                    name = doc.data().member_name;
                    email = doc.data().member_email;
                    contactNumber = doc.data().member_number;

                    $("#assignedproperty").val(propertyName);
                    $("#assignedunit").val(unitID);
                    $("#newusername").val(doc.data().member_name);
                    $("#newemail").val(doc.data().member_email);
                    $("#newcontactdiv").val(doc.data().member_number);

                    $("#newusername").prop('disabled', true);
                    $("#emaildiv").css("display","block");
                    $("#newemail").css("background-color","white");
                    //$("#newemail").prop('disabled', true);
                    $("#newcontactdiv").prop('disabled', true);
                    $("#contactSelect").prop('disabled', true);
                    $("#DeleteUser").css("display","block");
                    // $("#SaveUser").prop('disabled', true);
                    // $("#CancelUser").prop('disabled', true);
                    $("#userbutton").hide();
                    $("#newcontactdiv").show();
                    $("#countrySeparator").hide();
                    $("#wait").css("display", "none");
                }
                else {
                    // doc.data() will be undefined in this case
                    $("#modalTitle").html("Error Message");
                    $("#message").html('Error for getting the data from database!');
                    $("#wait").css("display", "none");
                    $("#messageModal").modal();
                }
            });
    // });
// });
}

function UpdateProperty()
{
    $("#wait").css("display", "block");
    var assignedproperty = $("#assignedpropertydrop option:selected").val();
    var assignedunit = $("#assignedunitdrop option:selected").val();
    var propertyMemberRef = db.collection("properties").doc(propertyID).collection("property_members").doc(propertyMemberID);
    var userUpdateRef = db.collection("users").doc(memberID);
    var propertyMemberIDRef =  db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members").doc(propertydocRefID);
    var newpropertyMemberIDRef = db.collection("properties").doc(propertyID).collection("units").doc(assignedunit).collection("unit_members");
   
    userUpdateRef.update({
        "unit_id":assignedunit
    }).then(function(){
        propertyMemberRef.update({
           // "p_member_property":assignedproperty,
           // "p_member_unit_id":assignedunit
                p_member_name: name,
                p_member_email: email,
                p_member_number:contactNumber,
                p_member_property:assignedproperty,
                p_member_unit_id:assignedunit,
                p_member_uid:memberID
        }).then(function(){
            newpropertyMemberIDRef.add({
                member_name: name,
                member_email: email,
                member_number:contactNumber,
                member_property:assignedproperty,
                member_unit:assignedunit,
                member_uid:memberID
            }).then(function(){
                propertyMemberIDRef.delete().then(function() {
                    // alert("Update Successfully!");
                    unitID = assignedunit;
                    $("#modalTitle").html("Manage User");
                    $("#message").html('Update Successfully!');
                    $("#wait").css("display", "none");
                    $("#messageModal").modal();
                var NewpropertyMemberIDRef =  db.collection("properties").doc(propertyID).collection("units").doc(assignedunit).collection("unit_members");
                NewpropertyMemberIDRef.get().then(function(querySnapshot) {
                    querySnapshot.forEach(function(doc) {
                       
                       if(doc.data().member_email == email)
                       {
                            property = doc.data().member_property;
                            unit = doc.data().member_unit;
                
                            $("#assignedproperty").val(doc.data().member_property);
                            $("#assignedunit").val(doc.data().member_unit);
                            $("#newusername").val(name);
                            $("#newemail").val(email);
                            $("#newcontact").val(contactNumber);
                            $("#DeleteUser").css("display","block");
                            $("#buttonProperty").hide();
                            $("#noedit").show();
                            $("#edit").hide();
                            //loadDetails();
                            $("#wait").css("display", "none");
                       }
                    })
                }).catch(function()
                    {
                        // doc.data() will be undefined in this case
                        $("#modalTitle").html("Error Message");
                        $("#DeleteUser").css("display","block");
                        $("#message").html('Error for getting the data from database!');
                        $("#wait").css("display", "none");
                        $("#messageModal").modal();
                    });
            }).catch(function(error) {
                $("#modalTitle").html("Error Message");
                $("#DeleteUser").css("display","block");
                $("#message").html('Error updating data!');
                $("#wait").css("display", "none");
                $("#messageModal").modal();
            });
        }).catch(function(error) {
            $("#modalTitle").html("Error Message");
            $("#DeleteUser").css("display","block");
            $("#message").html('Error updating data!');
            $("#wait").css("display", "none");
            $("#messageModal").modal();
        });
    }).catch(function(error) {
        $("#modalTitle").html("Error Message");
        $("#DeleteUser").css("display","block");
        $("#message").html('Error updating data!');
        $("#wait").css("display", "none");
        $("#messageModal").modal();
    });
});

    // if(assignedproperty == "")
    // {
       

       
    //     propertyMemberIDRef.update({
    //         member_name: name,
    //         member_email: email,
    //         member_number:contactNumber,
    //         member_property:propertyName,
    //         member_unit:assignedunit
    //     })
    //     .then(function() {
    //         alert("The data has been saved successfully!");
    //     })
    // }
    // else if(assignedunit == "")
    // {
    //     propertyMemberIDRef.update({
    //         member_name: name,
    //         member_email: email,
    //         member_number:contactNumber,
    //         member_property:assignedproperty,
    //         member_unit:unitID
    //     })
    //     .then(function() {
    //         alert("The data has been saved successfully!");
    //     })
    // }
    // else if(assignedproperty != "" && assignedunit != "")
    // {
    //     propertyMemberIDRef.update({
    //         member_name: name,
    //         member_email: email,
    //         member_number:contactNumber,
    //         member_property:assignedproperty,
    //         member_unit:assignedunit
    //     })
    //     .then(function() {
    //         alert("The data has been saved successfully!");
    //     })
    // }
    // else
    // {
    //     alert("Please fill at least one of the field");
    // }

   
}

function deleteUser()
{
    $("#wait").css("display", "block");
    var propertyRef = db.collection("properties").doc(propertyID).collection("property_members");
    var deleteUnitMemberRef = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members");
    var propertyDeleteID;
    var memberDeleteID;
    
    propertyRef.get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc){
            if(findEmail == doc.data().p_member_email)
            {
                memberDeleteID = doc.data().p_member_uid;
                propertyDeleteID = doc.id;
            }
        })
        var unitMemberID;
        deleteUnitMemberRef.get().then(function(querySnapshot){
            querySnapshot.forEach(function(doc){
                    if(findEmail == doc.data().member_email)
                    {
                        unitMemberID = doc.id;
                    }
                });
               
        db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members").doc(unitMemberID).delete().then(function(){
            db.collection("properties").doc(propertyID).collection("property_members").doc(propertyDeleteID).delete().then(function(){
                db.collection("users").doc(memberDeleteID).delete().then(function(){
                    $("#deleteMessage").html("Delete Successfully!");
                    $("#deleteTitle").html("Manage User");
                    $("#deleteModal").modal();
                    $("#wait").css("display", "none");
                }).catch(function(error) {
                    $("#deleteTitle").html("Error Message");
                    $("#deleteMessage").html("Error for removing");
                    $("#wait").css("display", "none");
                    $("#deleteModal").modal();
                });
            }).catch(function(error) {
                $("#deleteTitle").html("Error Message");
                $("#deleteMessage").html("Error for removing");
                $("#wait").css("display", "none");
                $("#deleteModal").modal();
            });
        }).catch(function(error) {
            $("#deleteTitle").html("Error Message");
            $("#deleteMessage").html("Error for removing");
            $("#wait").css("display", "none");
            $("#deleteModal").modal();
    });
}); 
    });   
}

function logout()
{
    firebase.auth().signOut()
  .then(function() {
    window.location = 'login.html';
  })
  .catch(function(error) {
    $("#deleteTitle").html("Error Message");
    $("#deleteMessage").html('Error logout');
    $("#deleteModal").modal();
  });
}