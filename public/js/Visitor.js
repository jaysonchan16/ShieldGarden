var db = firebase.firestore();

$(document).ready(function(){
    loadDetails();
});

function loadDetails()
{
    $("#wait").css("display", "block");
    firebase.auth().onAuthStateChanged(function(user) {
    if (!user) {
        window.location = 'login.html';
        }
        $('#userprofile').html(user.email);

        var userId = user.uid;

        var userdocRef = db.collection("users").doc(userId);

        userdocRef.get().then(function(doc) {
            if (doc.exists) {
                propertyID = doc.data().property_id;
                unitID = doc.data().unit_id; 
               property(propertyID);
            }
            else {
                // doc.data() will be undefined in this case
                console.log("No such document!");
            }
        });
    });
}

function property(propertyID)
{
    var propertyName = db.collection("properties").doc(propertyID).collection("property_visitor_logs");

    // hardcode and pass the property name to the AddNewUser page and UpdateUser page
    propertyName.get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
        
        var checkin = doc.data().visitor_check_in;
        var dCheckIn;
        var nCheckIn;
        var monthCheckIn;
        var dayCheckIn;
        var timeCheckIn;
        var dCheckInTime;
        var dateCheckIn;
        var yearCheckIn;
        var checkout = doc.data().visitor_check_out;
        var dCheckOut;
        var nCheckOut;
        var monthCheckOut;
        var dayCheckOut;
        var timeCheckOut;
        var dCheckOutTime;
        var dateCheckOut;
        var yearCheckOut;

        if(doc.data().visitor_check_in == null || doc.data().visitor_check_in == "") 
        {   
            checkin = "-";
        }
        else
        {
            dCheckIn = new Date(doc.data().visitor_check_in);
            nCheckIn = dCheckIn.toDateString();
            monthCheckIn = nCheckIn.substring(4,7);
            dayCheckIn = nCheckIn.substring(8,10);
            yearCheckIn = nCheckIn.substring(11,15);
            dateCheckIn = dayCheckIn+' '+monthCheckIn+' '+yearCheckIn;
            dCheckInTime = dCheckIn.toTimeString();
            timeCheckIn = dCheckInTime.split(' ')[0];
            
            checkin = timeCheckIn +', '+ dateCheckIn;
        }
           
        if(doc.data().visitor_check_out == null || doc.data().visitor_check_out == "") 
        {   
            checkout = "-";
        }
        else
        {
            dCheckOut = new Date(doc.data().visitor_check_out);
            nCheckOut = dCheckOut.toDateString();
            monthCheckOut = nCheckOut.substring(4,7);
            dayCheckOut = nCheckOut.substring(8,10);
            yearCheckOut = nCheckOut.substring(11,15);
            dateCheckOut = dayCheckOut+' '+monthCheckOut+' '+yearCheckOut;
            dCheckOutTime = dCheckOut.toTimeString();
            timeCheckOut = dCheckOutTime.split(' ')[0];
            
            checkout = timeCheckOut +', '+ dateCheckOut;
        }
            $(".table tbody").append("<tr><td><div class='thumbnail'><img class='portrait' src='"+doc.data().visitor_image_url+"' alt='Image'/></div></td>"+
                                    "<td>"+doc.data().visitor_name+"</td><td>"+doc.data().visitor_purpose+"</td><td>"+checkin+"</td><td>"+checkout+"</td></tr>");
    });
    $("#wait").css("display", "none");
  });
}

function add(ID)
{
    //console.log(ID);
    sessionStorage.setItem("propertyID",propertyID);

    window.location = 'ManageUnitsDetails.html';
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