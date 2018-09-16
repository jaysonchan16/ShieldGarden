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

    $("#AddNewUser").off('click').on('click', function(){
        sessionStorage.setItem("propertyID",propertyID);
        sessionStorage.setItem("unitID",unitID);
        window.location = 'AddNewUser.html';
    });
});

function loadDetails()
{
    firebase.auth().onAuthStateChanged(function(user) {
    if (!user) {
        window.location = 'login.html';
        }
        $('#userprofile').html(user.email);
        
        sessionStorage.removeItem("propertyID");
        sessionStorage.removeItem("unitID");
        sessionStorage.removeItem("findID");

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
            sessionStorage.setItem("propertyName",doc.data().property_name);
        } else {
            console.log("No such document!");
        }
    }).catch(function(error) {
        console.log("Error getting document:", error);
    });
    
    var propertydocRef = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members");

    propertydocRef.get().then(function(querySnapshot){
        querySnapshot.forEach(function(doc){
            //console.log(doc.data());
            console.log(doc.id)
            $(".table tbody").append("<tr><td class='name findButton' id='"+doc.id+"' onclick='details(this.id)'>"+doc.data().member_name+"</td><td>"+doc.data().member_email+
                                          "</td><td>"+doc.data().member_ContactNumber+"</td><td>"+doc.data().member_property+
                                          "</td><td>"+doc.data().member_unit+"</td></tr>");
        });
    });
}

function details(ID)
{
    //console.log(ID);
    sessionStorage.setItem("propertyID",propertyID);
    sessionStorage.setItem("unitID",unitID);
    sessionStorage.setItem("findID",ID);
    window.location = 'UpdateUser.html';
}