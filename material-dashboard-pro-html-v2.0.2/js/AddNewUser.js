var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var unitID = sessionStorage.getItem("unitID");
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


        addnewuser
    });
}

function addnewuser(propertyID,unitID)
{
    var propertydocRef = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members");

    propertydocRef.get().then(function(querySnapshot){
        querySnapshot.forEach(function(doc){
            //console.log(doc.data());
            $(".table tbody").append("<tr><td class='name'>"+doc.data().member_name+"</td><td>"+doc.data().member_email+
                                          "</td><td>"+doc.data().member_ContactNumber+"</td><td>"+doc.data().member_property+
                                          "</td><td>"+doc.data().member_unit+"</td></tr>");
        });
    });
}