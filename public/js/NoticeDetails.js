var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var noticesID = sessionStorage.getItem("NoticesID");
var selected_file;
var NoticesRef;
var file_name;
var photo_database;
var title;
var description;
var oldPhotoURL;

$(document).ready(function(){
    loadDetails();    

    $("#EditNotices").off('click').on('click', function(){
        EditNotices();
    });

    $("#SaveDetails").off('click').on('click', function(){
        SaveDetails();
    });

    $("#mainPage").off('click').on('click', function(){
        window.location = 'Facilities.html';
    }); 

    $("#CancelDetails").off('click').on('click', function(){
        loadDetails();
        $("#nonedit").show();
        $("#edit").hide();
        $("#NoticesButton").hide();
    });
    // $('#addMore').on('click', function() {
    //     var data = $("#slottable tr:eq(1)").clone(true).appendTo("#slottable");
    //     data.find("input").val('');
    // });

    // $(document).on('click', '.remove', function() {
    //     var trIndex = $(this).closest("tr").index();
    //        if(trIndex>1) {
    //         $(this).closest("tr").remove();
    //       } else {
    //         alert("Sorry!! Can't remove first row!");
    //       }
    //  });

     $("#addMore").off('click').on('click',function(){
        add();
     });
});

function loadDetails()
{
    $("#wait").css("display", "block");
    $(".delete").hide();
    firebase.auth().onAuthStateChanged(function(user) {
    if (!user) {
        window.location = 'login.html';
        }
        $('#userprofile').html(user.email);

        NoticesRef = db.collection("properties").doc(propertyID).collection("notices").doc(noticesID);
        
        noticesData();
    });
}

function EditNotices()
{
    $("#title").val("");
    $("#description").val("");
    $("#timepicker").show();
    $("#NoticesButton").show();
    $("#nonedit").hide();
    $("#edit").show();
}

function readURL(input) {
    $("#wait").css("display", "block");
    if (input.files && input.files[0] !=null) {
        var reader = new FileReader();

        reader.onload = function (e) {
            
            $('#blah')
                .attr('src', e.target.result)
                .height(200);
                if($('#blah').attr('src') != "#")
                {
                    $("#blah").show();
                    $("#photo").hide();
                }
                $("#wait").css("display", "none");
        };
        
        
        selected_file = input.files[0];
        reader.readAsDataURL(input.files[0]);
        
    }

}

function SaveDetails()
{
    $("#wait").css("display", "block");
    var titlenoedit = $("#title").val();
    var descriptionnoedit = $("#description").val();
    
    
    if(selected_file == null)
    {
        update(titlenoedit,descriptionnoedit,oldPhotoURL);
    }
    else
    {
        var filename = selected_file.name;
        var storageRef = firebase.storage().ref();
        var FacilityRef = storageRef.child('properties/'+propertyID+'/notices_media/'+filename);
        var uploadTask = FacilityRef.put(selected_file);
         //upload image step
        uploadTask.on('state_changed',
    
        function(snapshot){
        /*var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;

        uploader.value= percentage;*/

        }, function(error) {

        }, function() {
        uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
            //get the image download url and then when open the website can automatically load the image from firestore
                //console.log('File available at', downloadURL);
                update(titlenoedit,descriptionnoedit,downloadURL);
                 $("#wait").css("display", "none");
            });
        });
    }
    
    // $("#SaveDetails").prop('disabled', true);
    // $("#DeleteDetails").prop('disabled', true);
    $("#NoticesButton").hide();
    $("#nonedit").show();
    $("#edit").hide();
}

function noticesData()
{
    $("#wait").css("display", "block");
    NoticesRef.get().then(function(doc) {
        if (doc.exists) {
            $("#notices_name").text(doc.data().notice_title);
            $("#applyimg").html('<img width="500" height="242" src="'+doc.data().notice_image_url+'"></img>');
            $("#titlenoedit").val(doc.data().notice_title);
            $("#descriptionnoedit").val(doc.data().notice_description);
            //photo_database = doc.data().facility_jpg_name;
            var first = doc.data().notice_image_url.split("/");
            var second = first[7].split("?");
            photo_database = second[0];
            title = doc.data().notice_title;
            description = doc.data().notice_description;
            oldPhotoURL =doc.data().notice_image_url;
            $("#wait").css("display", "none");
        }
        else {
            $("#modalTitle").html("Error Message");
            $("#message").html("Cannot find the data in the database");
            $("#messageModal").modal();
        }
    });
}

function logout()
{
    firebase.auth().signOut()
  .then(function() {
    window.location = 'login.html';
  })
  .catch(function(error) {
        $("#modalTitle").html("Error Message");
        $("#message").html("Cannot logout");
        $("#messageModal").modal();
  });
}

function update(titlenoedit,descriptionnoedit,downloadURL)
{
    var today = new Date();
    if(titlenoedit == "")
    {
        if(descriptionnoedit == "")
        {
            NoticesRef.update({
                notice_description: description,
                notice_image_url: downloadURL,
                notice_title:title,
                notice_date_posted:today
            })
            .then(function() {
                loadDetails();
                $("#modalTitle").html("Manage Notices");
                $("#message").html("The data has been updated successfully!");
                $("#messageModal").modal();
            })
        }
        else
        {
            NoticesRef.update({
                notice_description: descriptionnoedit,
                notice_image_url: downloadURL,
                notice_title:title,
                notice_date_posted:today
            })
            .then(function() {
                loadDetails();
                $("#modalTitle").html("Manage Notices");
                $("#message").html("The data has been updated successfully!");
                $("#messageModal").modal();
            })
        }
    }
    else if(descriptionnoedit == "")
    {
        NoticesRef.update({
            notice_description: description,
            notice_image_url: downloadURL,
            notice_title:titlenoedit,
            notice_date_posted:today
        })
        .then(function() {
            loadDetails();
            $("#modalTitle").html("Manage Notices");
            $("#message").html("The data has been updated successfully!");
            $("#messageModal").modal();
        })
    }
    else if(titlenoedit != "" && descriptionnoedit != "")
    {
        NoticesRef.update({
            notice_description: descriptionnoedit,
            notice_image_url: downloadURL,
            notice_title:titlenoedit,
            notice_date_posted:today
        })
        .then(function() {
            loadDetails();
            $("#modalTitle").html("Manage Notices");
            $("#message").html("The data has been updated successfully!");
            $("#messageModal").modal();
        })
    }
    else
    {
        loadDetails();
        $("#modalTitle").html("Manage Notices");
        $("#message").html("Please fill up at least one field!");
        $("#messageModal").modal();
    }
}