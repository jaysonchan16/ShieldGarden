var db = firebase.firestore();
var propertyID;
var unitID;
var findID;

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
                propertyID = doc.data().property_id;
                unitID = doc.data().unit_id; 
               property(propertyID,unitID);
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
    var propertyName = db.collection("properties").doc(propertyID);

    // hardcode and pass the property name to the AddNewUser page and UpdateUser page
    propertyName.get().then(function(doc){
        if (doc.exists) {
           // console.log("Document data:", doc.data());
           var address = unitID +", "+doc.data().property_name;
           sessionStorage.setItem("propertyName",doc.data().property_name);
          $(".table tbody").append("<tr><td class='name findButton' id='"+unitID+"' onclick='details(this.id)'>"+unitID+"</td><td>"+address+"</td></tr>");
       
        } else {
            console.log("No such document!");
        }
    }).catch(function(error) {
        console.log("Error getting document:", error);
    });

   }

function details(ID)
{
    //console.log(ID);
    sessionStorage.setItem("propertyID",propertyID);
    sessionStorage.setItem("unitID",ID);
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