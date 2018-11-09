var db = firebase.firestore();
var propertyID;
var deleteID;
var deleteImage;
var deleteTitle;

$(document).ready(function(){
    loadDetails();

    $("#AddNewNotice").off('click').on('click', function(){
        sessionStorage.setItem("propertyID",propertyID);
        window.location = 'AddNewNotices.html';
    });

    $("#DeleteNotice").off('click').on('click', function(){
        deleteNotice();
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
                $("#message").text("Cannot get in database");
                $("#wait").css("display", "none");
                $("#messageModal").modal();
            }
        });
    });
}

function property(propertyID)
{
    $(".table tbody").html("");
    var propertyName = db.collection("properties").doc(propertyID).collection("notices");

    // hardcode and pass the property name to the AddNewUser page and UpdateUser page
    propertyName.get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            var posted = doc.data().notice_date_posted;
            var dCheckIn;
            var nCheckIn;
            var monthCheckIn;
            var dayCheckIn;
            var timeCheckIn;
            var dCheckInTime;
            var dateCheckIn;
            var yearCheckIn;

            if(doc.data().notice_date_posted == null || doc.data().notice_date_posted == "") 
            {   
                posted = "-";
            }
            else
            {
                dCheckIn = new Date(doc.data().notice_date_posted);
                nCheckIn = dCheckIn.toDateString();
                monthCheckIn = nCheckIn.substring(4,7);
                dayCheckIn = nCheckIn.substring(8,10);
                yearCheckIn = nCheckIn.substring(11,15);
                dateCheckIn = dayCheckIn+' '+monthCheckIn+' '+yearCheckIn;
                dCheckInTime = dCheckIn.toTimeString();
                timeCheckIn = dCheckInTime.split(' ')[0];
                
                posted = timeCheckIn +', '+ dateCheckIn;
            }
            $(".table tbody").append("<tr><td><div class='thumbnail'><img class='portrait' src='"+doc.data().notice_image_url+"' alt='Image'/></div></td>"+
                                    "<td>"+doc.data().notice_title+"</td><td>"+doc.data().notice_description+"</td><td>"+posted+"</td><td class='name findButton' id='"+doc.id+","+doc.data().notice_image_url+","+
                                    doc.data().notice_title+"' onclick='deletes(this.id)'>Delete</td></tr>");
    });
    $("#AddNewNotice").prop("disabled",false);
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

function deleteNotice()
{
    $("#wait").css("display", "block");
    var url = deleteImage.split("/")[7];
    var path = url.split("?")[0];
    var fullpath = path.split("%2F");

    var storageRef = firebase.storage().ref();

    var desertRef = storageRef.child(fullpath[0]+'/'+fullpath[1]+'/'+fullpath[2]+'/'+fullpath[3]);

    var propertyRef = db.collection("properties").doc(propertyID).collection("notices").doc(deleteID);
    
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

function logout()
{
    firebase.auth().signOut()
  .then(function() {
    window.location = 'login.html';
  })
  .catch(function(error) {
    alert("Error for logout!");
    $("#wait").css("display", "none");
  });
}