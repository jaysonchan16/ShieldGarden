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
        var userId = user.uid;

        var userdocRef = db.collection("users").doc(userId);

        userdocRef.get().then(function(doc) {
            if (doc.exists) {
                $('#userprofile').html(doc.data().email);
            }
            else {
                // doc.data() will be undefined in this case
                console.log("No such document!");
            }
        });
    });
}