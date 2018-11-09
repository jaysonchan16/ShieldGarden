var db = firebase.firestore();
var propertyID;
var deleteID;
var deleteImage;
var deleteTitle;

$(document).ready(function(){
    loadDetails();

    $("#AddNewFacility").off('click').on('click', function(){
        AddNewFacility();
    });

    $("#DeleteFacility").off('click').on('click', function(){
        deleteFacility();
    });

    $("#close").off('click').on('click', function(){
        loadDetails();
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
                $("#message").text("Error getting data");
               $("#messageModal").modal();
            }
        });
    });
}

function property(propertyID)
{
    $(".table tbody").html("");
    var propertyName = db.collection("properties").doc(propertyID).collection("facilities");

    // hardcode and pass the property name to the AddNewUser page and UpdateUser page
    propertyName.get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            $(".table tbody").append("<tr><td><div class='thumbnail'><img class='portrait' src='"+doc.data().facility_image_url+"' alt='Image'/></div></td>"+
                                    "<td class='findButton' id='"+doc.id+"' onclick='details(this.id)'>"+doc.data().facility_title+"</td><td>"+doc.data().facility_description+"</td>"+
                                    "<td class='name findButton' id='"+doc.id+","+doc.data().facility_image_url+","+
                                    doc.data().facility_title+"' onclick='deletes(this.id)'>Delete</td></tr>+</tr>");
    });
    $("#AddNewFacility").prop("disabled",false);
    $("#wait").css("display", "none");
  });
}


function deletes(details)
{
    deleteID = details.split(",")[0];
    deleteImage = details.split(",")[1];
    deleteTitle = details.split(",")[2];
    $("#deleteModal").modal();
}

function deleteFacility()
{
    $("#wait").css("display", "block");
    var url = deleteImage.split("/")[7];
    var path = url.split("?")[0];
    var fullpath = path.split("%2F");

    var storageRef = firebase.storage().ref();

    var desertRef = storageRef.child(fullpath[0]+'/'+fullpath[1]+'/'+fullpath[2]+'/'+fullpath[3]);

    var propertyRef = db.collection("properties").doc(propertyID).collection("facilities").doc(deleteID);
    
    propertyRef.delete().then(function(){
    desertRef.delete().then(function() {
        $("#wait").css("display", "none");
        $("#message").text("Delete Successfully");
        $("#deleteModal").modal("toggle");
        $("#messageModal").modal();
      }).catch(function(error) {
        $("#message").text("Delete Successfully");
        $("#deleteModal").modal("toggle");
        $("#wait").css("display", "none");
        $("#messageModal").modal();
      });
    }).catch(function(error) {
        $("#message").text("Delete Successfully");
        $("#deleteModal").modal("toggle");
        $("#wait").css("display", "none");
        $("#messageModal").modal();
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

function logout()
{
    firebase.auth().signOut()
  .then(function() {
    window.location = 'login.html';
  })
  .catch(function(error) {
    $("#message").text("Error for logout");
    $("#deleteModal").modal("toggle");
    $("#wait").css("display", "none");
    $("#messageModal").modal();
  });
}