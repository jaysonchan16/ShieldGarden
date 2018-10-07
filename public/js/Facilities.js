var db = firebase.firestore();
var propertyID;

$(document).ready(function(){
    loadDetails();

    $("#AddNewFacility").off('click').on('click', function(){
        AddNewFacility();
    });
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
    var propertyName = db.collection("properties").doc(propertyID).collection("facilities");

    // hardcode and pass the property name to the AddNewUser page and UpdateUser page
    propertyName.get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            $(".table tbody").append("<tr><td><img width='242' height='242' src='"+doc.data().facility_image_url+"'></td>"+
                                    "<td class='findButton' id='"+doc.id+"' onclick='details(this.id)'>"+doc.data().facility_title+"</td><td>"+doc.data().facility_description+"</td></tr>");
    });
    $("#AddNewFacility").prop("disabled",false);
  });
}

function AddNewFacility()
{
    sessionStorage.setItem("propertyID",propertyID);
    window.location = 'AddNewFacility.html';
}

function details(ID)
{
    sessionStorage.setItem("facilityID",ID);
    sessionStorage.setItem("propertyID",propertyID);
    window.location = 'FacilityDetails.html';
}