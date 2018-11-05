var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var unitID = sessionStorage.getItem("unitID");
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
    //memberdocRef = db.collection("properties").doc(propertyID).collection("property_members");
    memberdocRef = db.collection("users");

    memberdocRef.get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {

            // if(inputemail == doc.data().p_member_email)
            // {
            //     member_email = doc.data().p_member_email;
            //     member_id = doc.data().p_member_uid;
            //     member_name = doc.data().p_member_name;
            //     $("#showblock").text(unitID);
            //     $("#showemail").text(doc.data().p_member_email);
            //     $("#assignUnit").show();
            //     $("#wait").css("display", "none");
            // }
            // else
            // {
            //     $("#showblock").text("");
            //     $("#showemail").text("");
            //     $("#wait").css("display", "none");
            // }
            if(inputemail == doc.data().email)
            {
                member_email = doc.data().email;
                member_id = doc.data().user_id;
                member_name = doc.data().name;
                $("#showblock").text(unitID);
                $("#showemail").text(member_email);
                $("#assignUnit").show();
            }
           /* else
            {
                $("#showblock").text("");
                $("#showemail").text("");
            }*/
            $("#wait").css("display", "none");
        });
    });
}

function AssignUnit()
{
    var propertydocRef = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members").doc(member_id);
    var error = 0;
    var checkProperty = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members");
    checkProperty.get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            if(doc.id == member_id)
            {
                alert("Data has inserted previously");
                error = 1;
            }
        })
        if(error == 0)
        {
            propertydocRef.set({
                member_name: member_name,
                member_email: member_email,
                //member_ContactNumber:memberContactNumber,
                member_property:propertyName,
                member_unit:unitID,
                member_uid:member_id
            })
            .then(function() {
                $("#searchModal").modal("toggle");
                alert("The data has been saved successfully!");
                loadDetails();
            })
            .catch(function(error) {
                var errorCode = error.code;
                var errorMessage = error.message;
            });   
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
    // An error happened
  });
}