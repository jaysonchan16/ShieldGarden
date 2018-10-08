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
    firebase.auth().onAuthStateChanged(function(user) {
    if (!user) {
        window.location = 'login.html';
        }
        $('#userprofile').html(user.email);

        var fulladrress = unitID + ", " + propertyName;
        $("#unit").text(unitID);
        $("#address").text(fulladrress);
        $("#UnitsText").text(unitID);

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
            console.log(data);
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
            });

        });
    });
}

function Search()
{
    var inputemail = $("#InputEmail").val();

    memberdocRef = db.collection("properties").doc(propertyID).collection("property_members");

    memberdocRef.get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {

        });
    });
}

function AssignUnit()
{

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