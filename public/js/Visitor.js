var db = firebase.firestore();

$(document).ready(function(){
    loadDetails();
});

function loadDetails()
{
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
            $(".table tbody").append("<tr><td><img width='242' height='242' src='"+doc.data().visitor_image_url+"'></td>"+
                                    "<td>"+doc.data().visitor_name+"</td><td>"+doc.data().visitor_purpose+"</td><td>"+doc.data().visitor_check_in+"</td><td>"+doc.data().visitor_check_out+"</td></tr>");
    });
  });
}

function add(ID)
{
    //console.log(ID);
    sessionStorage.setItem("propertyID",propertyID);

    window.location = 'ManageUnitsDetails.html';
}