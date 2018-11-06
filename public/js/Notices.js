var db = firebase.firestore();
var propertyID;

$(document).ready(function(){
    loadDetails();

    $("#AddNewNotice").off('click').on('click', function(){
        sessionStorage.setItem("propertyID",propertyID);
        window.location = 'AddNewNotices.html';
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
    var propertyName = db.collection("properties").doc(propertyID).collection("notices");

    // hardcode and pass the property name to the AddNewUser page and UpdateUser page
    propertyName.get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            $(".table tbody").append("<tr><td><div class='thumbnail'><img class='portrait' src='"+doc.data().notice_image_url+"' alt='Image'/></div></td>"+
                                    "<td>"+doc.data().notice_title+"</td><td>"+doc.data().notice_description+"</td></tr>");
    });
    $("#AddNewNotice").prop("disabled",false);
    $("#wait").css("display", "none");
  });
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