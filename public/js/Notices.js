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
                $("#modalTitle").html("Error Message");
                $("#message").html("Cannot get in database");
                $("#wait").css("display", "none");
                $("#messageModal").modal();
            }
        });
    });
}

function property(propertyID)
{
    $(".table tbody").html("");
    var propertyName = db.collection("properties").doc(propertyID).collection("notices").orderBy('notice_date_posted','desc');

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

                // var day = dCheckIn.getDate();
                // var monthIndex = dCheckIn.getMonth();
                // var year = dCheckIn.getFullYear();
                // var date = day+'-'+monthIndex+'-'+year;
                nCheckIn = dCheckIn.toDateString();
                monthCheckIn = nCheckIn.substring(4,7);
                dayCheckIn = nCheckIn.substring(8,10);
                yearCheckIn = nCheckIn.substring(11,15);
                dateCheckIn = dayCheckIn+' '+monthCheckIn+' '+yearCheckIn;
                dCheckInTime = dCheckIn.toTimeString();
                timeCheckIn = dCheckInTime.split(' ')[0];
                
                posted = timeCheckIn +', '+ dateCheckIn;
            }

            if(doc.data().notice_image_url == "" || doc.data().notice_image_url == null)
            {
                $(".table tbody").append("<tr><td><i class ='material-icons'>photo</i></td>"+
                                    "<td class='findButton' id='"+doc.id+"' onclick='details(this.id)'>"+doc.data().notice_title+"</td><td>"+doc.data().notice_description+"</td><td>"+posted+"</td><td class='name findButton' id='"+doc.id+","+doc.data().notice_image_url+","+
                                    doc.data().notice_title+"' onclick='deletes(this.id)'>Delete</td></tr>");
            }
            else if(doc.data().notice_image_url != "" || doc.data().notice_image_url != null)
            {
                if(doc.data().notice_image_url.includes("https://"))
                {
                    $(".table tbody").append("<tr><td><div class='thumbnail'><img class='portrait' src='"+doc.data().notice_image_url+"' alt='Image'/></div></td>"+
                                    "<td class='findButton' id='"+doc.id+"' onclick='details(this.id)'>"+doc.data().notice_title+"</td><td>"+doc.data().notice_description+"</td><td>"+posted+"</td><td class='name findButton' id='"+doc.id+","+doc.data().notice_image_url+","+
                                    doc.data().notice_title+"' onclick='deletes(this.id)'>Delete</td></tr>");
                }
                else
                {
                    $(".table tbody").append("<tr><td><i class ='material-icons'>photo</i></td>"+
                                    "<td class='findButton' id='"+doc.id+"' onclick='details(this.id)'>"+doc.data().notice_title+"</td><td>"+doc.data().notice_description+"</td><td>"+posted+"</td><td class='name findButton' id='"+doc.id+","+doc.data().notice_image_url+","+
                                    doc.data().notice_title+"' onclick='deletes(this.id)'>Delete</td></tr>");
                }
            }
            else
            {
                $(".table tbody").append("<tr><td><i class ='material-icons'>photo</i></td>"+
                                    "<td class='findButton' id='"+doc.id+"' onclick='details(this.id)'>"+doc.data().notice_title+"</td><td>"+doc.data().notice_description+"</td><td>"+posted+"</td><td class='name findButton' id='"+doc.id+","+doc.data().notice_image_url+","+
                                    doc.data().notice_title+"' onclick='deletes(this.id)'>Delete</td></tr>");
            }

            
    });
    $("#AddNewNotice").prop("disabled",false);
    $("#wait").css("display", "none");
  });
}

// function SortbyName(a,b)
// {
//     var amyDate = a.split("-");
//     var aNewDate=new Date(amyDate[1]+","+amyDate[0]+","+amyDate[2]).getTime();
//     var bmyDate = b.split("-");
//     var bNewDate=new Date(bmyDate[1]+","+bmyDate[0]+","+bmyDate[2]).getTime();
//     ((aNewDate < bNewDate) ? -1 : ((aNewDate > bNewDate) ? 1 : 0));
// }
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
        $("#modalTitle").html("Manage Notice");
        $("#message").html("Delete Successfully");
        $("#deleteModal").modal("toggle");
        $("#messageModal").modal();
      }).catch(function(error) {
        $("#message").html("Error deleting the data");
        $("#modalTitle").html("Error Message");
        $("#deleteModal").modal("toggle");
        $("#wait").css("display", "none");
        $("#messageModal").modal();
      });
    }).catch(function(error) {
        $("#message").html("Error deleting the data");
        $("#modalTitle").html("Error Message");
        $("#deleteModal").modal("toggle");
        $("#wait").css("display", "none");
        $("#messageModal").modal();
    });
}

function details(ID)
{
    sessionStorage.setItem("NoticesID",ID);
    sessionStorage.setItem("propertyID",propertyID);
    window.location = 'NoticeDetails.html';
}


function logout()
{
    firebase.auth().signOut()
  .then(function() {
    window.location = 'login.html';
  })
  .catch(function(error) {
    $("#modalTitle").html("Error Message");
    $("#message").html("Cannot logout!");
    $("#wait").css("display", "none");
  });
}