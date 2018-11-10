var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var unitID = sessionStorage.getItem("unitID");//new
var propertyName = sessionStorage.getItem("propertyName");
var memberName = [];
var propertydocRef;
var facilitydocRef;
var facilityBookingTitle = [];
var facilityBookingDate = [];
var memberdocRef;
var member_id;
var member_email;
var member_name;
var updateuserID;
var unit_id;//old

$(document).ready(function(){
    loadDetails();

    $("#mainPage").off('click').on('click', function(){
        window.location = 'ManageUnits.html';
    }); 

    $("#addMore").off('click').on('click', function(){
        $("#searchModal").modal();
    });

    $("#SearchEmail").off('click').on('click', function(){
        Search();
    });

    $("#assignUnit").off('click').on('click', function(){
        AssignUnit();
    });
});

function loadDetails()
{    
    $("#wait").css("display", "block");
    $("#showMember").html("");
    $("#bookings").html("");
    firebase.auth().onAuthStateChanged(function(user) {
    if (!user) {
        window.location = 'login.html';
        }
        $('#userprofile').html(user.email);

        var fulladrress = unitID + ", " + propertyName;
        $("#unit").text(unitID);
        $("#address").text(fulladrress);
        $("#UnitsText").text(unitID);
        memberName = [];
        propertydocRef = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members");
        facilitydocRef = db.collection("properties").doc(propertyID).collection("property_members").doc(unitID).collection("facility_bookings");
        
        propertydocRef.get().then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                
                memberName.push(doc.data().member_name);
               
                for(var i =0; i<memberName.length; i++)
                {
                    $("#member").val(memberName+",");
                //  console.log(doc.id, " => ", doc.data());
                }
            });
            
            var data = $("#member").val().split(",");
            for(var i=0; i<data.length;i++)
            {
                $("#showMember").append(data[i]+"<br>");
            }
            
                facilitydocRef.get().then(function(querySnapshot) {
                    querySnapshot.forEach(function(doc) {
                        
                        facilityBookingTitle.push(doc.data().booking_title);
                        facilityBookingDate.push(doc.data().booking_date);

                        for(var i =0; i<facilityBookingTitle.length; i++)
                        {
                            $("#bookingTitle").val(facilityBookingTitle + ",");
                            $("#bookingDate").val(facilityBookingDate + ",");
                        }
                    });
                var bookingTitle = $("#bookingTitle").val().split(",");
                var bookingDate = $("#bookingDate").val().split(",");
                
                for(var j=0; j<bookingTitle.length;j++)
                {
                    $("#bookings").append(bookingTitle[j]+"<span id='space'>"+bookingDate[j]+"</span><br>");
                }
                $("#wait").css("display", "none");
            });

        });
    });
}

function Search()
{
    $("#wait").css("display", "block");
    var inputemail = $("#InputEmail").val();
    
    memberdocRef = db.collection("users");
    var updateUsers = db.collection("properties").doc(propertyID).collection("property_members");

//users collection
    memberdocRef.get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
          //  console.log(doc.data());
            if(inputemail == doc.data().email)
            {
                member_email = doc.data().email;
                member_id = doc.data().user_id;
                member_name = doc.data().name;
                unit_id = doc.data().unit_id;
                $("#showblock").text(unitID);
                $("#showemail").text(member_email);
                $("#assignUnit").show();
            }
            
        });
        //get property members
        //purpose for update the data
        updateUsers.get().then(function(querySnapshot){
            querySnapshot.forEach(function(doc) {
                if(inputemail == doc.data().p_member_email)
                {
                    updateuserID = doc.id;
                }
            });
            $("#wait").css("display", "none");
        })

    });
}

function AssignUnit()
{
    $("#wait").css("display", "block");
    //copy one from the old data
    var propertydocOldRef = db.collection("properties").doc(propertyID).collection("units").doc(unit_id).collection("unit_members");
    var error = 0;
    //check the new property got the unitID
    var checkProperty = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members");
    var userRef = db.collection("users").doc(member_id);
    //update the property_members unit
   //console.log(updateuserID);
    var propertyMemberRef = db.collection("properties").doc(propertyID).collection("property_members").doc(updateuserID);
    var deleteID;
    var saveEmail;
    var saveName;
    var saveNumber;
    var saveProperty;
    var saveUid;

    checkProperty.get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            if(doc.data().email == member_email)
            {
                $("#message").text("Data has inserted previously");
                $("#errorModal").modal();
                //alert("Data has inserted previously");
                error = 1;
                $("#wait").css("display", "none");
            }
        })
        if(error == 0)
        {
            userRef.update({
                "unit_id":unitID
            }).then(function() {
                propertyMemberRef.update({
                    "p_member_unit_id":unitID
                }).then(function(){
                    propertydocOldRef.get().then(function(querySnapshot) {
                        querySnapshot.forEach(function(doc) {
                            if(member_email == doc.data().member_email)
                            {
                                deleteID = doc.id;
                                saveEmail = doc.data().member_email;
                                saveName = doc.data().member_name;
                                saveNumber = doc.data().member_number;
                                saveProperty = doc.data().member_property;
                                saveUid = doc.data().member_uid;
                            }
                        });
                        checkProperty.add({
                                member_name: saveName,
                                //member_password:memberPassword,
                                member_email: saveEmail,
                                member_number:saveNumber,
                                member_property:saveProperty,
                                member_unit:unitID,
                                member_uid:saveUid
                            }).then(function(){
                                propertydocOldRef.doc(deleteID).delete().then(function() {
                                    $("#message").text("The member has changed the unit successfully");
                                    $("#wait").css("display", "none");
                                    $("#searchModal").modal("hide");
                                    $("#errorModal").modal();
                                    loadDetails();
                                }).catch(function(error) {
                                    $("#message").text("Cannot changed unit!");
                                    $("#errorModal").modal();
                                    $("#wait").css("display", "none");
                                });
                            });
                    });
                }).catch(function(error) {
                    var errorCode = error.code;
                    var errorMessage = error.message;
                    $("#message").text("Cannot changed unit!");
                    $("#wait").css("display", "none");
                    $("#searchModal").modal("hide");
                    $("#errorModal").modal();
                });
            }).catch(function(error) {
                var errorCode = error.code;
                var errorMessage = error.message;
                $("#message").text("Cannot changed unit!");
                $("#wait").css("display", "none");
                $("#searchModal").modal("hide");
                $("#errorModal").modal();
            });
            // propertydocRef.set({
            //     member_name: member_name,
            //     member_email: member_email,
            //     //member_ContactNumber:memberContactNumber,
            //     member_property:propertyName,
            //     member_unit:unitID,
            //     member_uid:member_id
            // })
            // .then(function() {
            //     $("#searchModal").modal("toggle");
            //     alert("The data has been saved successfully!");
            //     loadDetails();
            // })
            // .catch(function(error) {
            //     var errorCode = error.code;
            //     var errorMessage = error.message;
            // });   
        }
    })
   
}

function logout()
{
    firebase.auth().signOut()
  .then(function() {
    window.location = 'login.html';
  })
  .catch(function(error) {
    $("#message").text("Cannot logout!");
    $("#wait").css("display", "none");
    $("#errorModal").modal();
  });
}