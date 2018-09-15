var db = firebase.firestore();

$(document).ready(function(){
    loadDetails();

    /*$("#Search").off('click').on('click', function(){
        var value = $("#SearchText").val();
        console.log(value);
        $(".table tbody tr").filter(function() {
            console.log($("#SearchText").text().toLowerCase().indexOf(value) > -1);
            $("#SearchText").toggle($("#SearchText").text().toLowerCase().indexOf(value) > -1)
          });
    });*/

    $("#SearchText").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".table tbody tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
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
               property(doc.data().property_id,doc.data().unit_id);
            }
            else {
                // doc.data() will be undefined in this case
                console.log("No such document!");
            }
        });
    });
}

function property(propertyID,unitID)
{
    var propertydocRef = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members");

    propertydocRef.get().then(function(querySnapshot){
        querySnapshot.forEach(function(doc){
            
            $(".table tbody").append("<tr><td class='name'>"+doc.data().member_name+"</td><td></tr>");
        });
    });
}