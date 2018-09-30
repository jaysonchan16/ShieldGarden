var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var facilityID = sessionStorage.getItem("facilityID");
var selected_file;
var FacilityRef;
var SlotFacilityRef;
var file_name;
var photo_database;
var title;
var description;
var oldPhotoURL;
var time_description;

$(document).ready(function(){
    loadDetails();

    $("#EditFacility").off('click').on('click', function(){
        EditFacility();
    });

    $("#SaveDetails").off('click').on('click', function(){
        SaveDetails();
    });

    $("#mainPage").off('click').on('click', function(){
        window.location = 'Facilities.html';
    }); 
});

function loadDetails()
{
    firebase.auth().onAuthStateChanged(function(user) {
    if (!user) {
        window.location = 'login.html';
        }
        $('#userprofile').html(user.email);
        FacilityRef = db.collection("properties").doc(propertyID).collection("facilities").doc(facilityID);
        FacilityRef.get().then(function(doc) {
            if (doc.exists) {
                $("#facilities_name").text(doc.data().facility_title);
                $("#applyimg").html('<img width="500" height="242" src="'+doc.data().facility_image_url+'"></img>');
                $("#namenoedit").val(doc.data().facility_title);
                $("#descriptionnoedit").val(doc.data().facility_description);
                $("#timedescriptionnnoedit").val(doc.data().facility_time_description);
                //photo_database = doc.data().facility_jpg_name;
                var first = doc.data().facility_image_url.split("/");
                var second = first[7].split("?");
                photo_database = second[0];
                title = doc.data().facility_title;
                description = doc.data().facility_description;
                oldPhotoURL =doc.data().facility_image_url;
                time_description = doc.data().facility_time_description;
            }
            else {
                // doc.data() will be undefined in this case
                console.log("No such document!");
            }
        });

        SlotFacilityRef = db.collection("properties").doc(propertyID).collection("facilities").doc(facilityID).collection("facility_slots");
        SlotFacilityRef.get().then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                $("#slottable").append("<tr><td>"+doc.data().slot_id+"</td><td>"+doc.data().slot_title+"</td><td>"+doc.data().slot_start_time+
                "</td><td>"+doc.data().slot_end_time+"</td><td>"+doc.data().slot_interval+"</td></tr>");
            });
        });
    });
}

function EditFacility()
{
    $("#SaveDetails").prop('disabled', false);
    $("#DeleteDetails").prop('disabled', false);
    $("#nonedit").hide();
    $("#edit").show();
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            selected_file = e.target.result;
            $('#blah')
                .attr('src', e.target.result)
                .height(200);
        };
        
        file_name = input.files[0].name;
        reader.readAsDataURL(input.files[0]);
        console.log(input.files[0]);
    }
}

function SaveDetails()
{
    var titlenoedit = $("#name").val();
    var descriptionnoedit = $("#description").val();
    var timedescriptionnoedit = $("#timedescription").val();

    if(file_name == photo_database)
    {
        if(titlenoedit == "")
        {
            FacilityRef.update({
                facility_booking_enabled : true,
                facility_description: descriptionnoedit,
                facility_id:facilityID,
                facility_image_url: oldPhotoURL,
                facility_time_description:timedescriptionnoedit,
                facility_title:title
            })
            .then(function() {
                alert("The data has been updated successfully!");
            })
        }
        else if(descriptionnoedit == "")
        {
            FacilityRef.update({
                facility_booking_enabled : true,
                facility_description: description,
                facility_id:facilityID,
                facility_image_url: oldPhotoURL,
                facility_time_description:timedescriptionnoedit,
                facility_title:titlenoedit
            })
            .then(function() {
                alert("The data has been updated successfully!");
            })
        }
        else if(timedescriptionnoedit == "")
        {
            FacilityRef.update({
                facility_booking_enabled : true,
                facility_description: descriptionnoedit,
                facility_id:facilityID,
                facility_image_url: oldPhotoURL,
                facility_time_description:time_description,
                facility_title:titlenoedit
            })
            .then(function() {
                alert("The data has been updated successfully!");
            })
        }
        else if(titlenoedit == "" && descriptionnoedit == "")
        {
            FacilityRef.update({
                facility_booking_enabled : true,
                facility_description: description,
                facility_id:facilityID,
                facility_image_url: oldPhotoURL,
                facility_time_description:timedescriptionnoedit,
                facility_title:title
            })
            .then(function() {
                alert("The data has been updated successfully!");
            })
        }
        else if(titlenoedit == "" && timedescriptionnoedit == "")
        {
            FacilityRef.update({
                facility_booking_enabled : true,
                facility_description: descriptionnoedit,
                facility_id:facilityID,
                facility_image_url: oldPhotoURL,
                facility_time_description:time_description,
                facility_title:title
            })
            .then(function() {
                alert("The data has been updated successfully!");
            })
        }
        else if(descriptionnoedit == "" && timedescriptionnoedit == "")
        {
            FacilityRef.update({
                facility_booking_enabled : true,
                facility_description: description,
                facility_id:facilityID,
                facility_image_url: oldPhotoURL,
                facility_time_description:time_description,
                facility_title:titlenoedit
            })
            .then(function() {
                alert("The data has been updated successfully!");
            })
        }
        else if(titlenoedit != "" && descriptionnoedit != "" && timedescriptionnoedit != "")
        {
            FacilityRef.update({
                facility_booking_enabled : true,
                facility_description: descriptionnoedit,
                facility_id:facilityID,
                facility_image_url: oldPhotoURL,
                facility_time_description:timedescriptionnoedit,
                facility_title:titlenoedit
            })
            .then(function() {
                alert("The data has been updated successfully!");
            })
        }
        else
        {
            alert("Please fill at least one of the field");
        }
    }
    else
    {
         //upload image step
        uploadTask.on('state_changed',
    
        function(snapshot){
        /*var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;

        uploader.value= percentage;*/

        }, function(error) {

        }, function() {
        uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
            //get the image download url and then when open the website can automatically load the image from firestore
                console.log('File available at', downloadURL);
                if(titlenoedit == "")
                {
                    FacilityRef.update({
                        facility_booking_enabled : true,
                        facility_description: descriptionnoedit,
                        facility_id:facilityID,
                        facility_image_url: downloadURL,
                        facility_time_description:timedescriptionnoedit,
                        facility_title:title
                    })
                    .then(function() {
                        alert("The data has been updated successfully!");
                    })
                }
                else if(descriptionnoedit == "")
                {
                    FacilityRef.update({
                        facility_booking_enabled : true,
                        facility_description: description,
                        facility_id:facilityID,
                        facility_image_url: downloadURL,
                        facility_time_description:timedescriptionnoedit,
                        facility_title:titlenoedit
                    })
                    .then(function() {
                        alert("The data has been updated successfully!");
                    })
                }
                else if(timedescriptionnoedit == "")
                {
                    FacilityRef.update({
                        facility_booking_enabled : true,
                        facility_description: descriptionnoedit,
                        facility_id:facilityID,
                        facility_image_url: downloadURL,
                        facility_time_description:time_description,
                        facility_title:titlenoedit
                    })
                    .then(function() {
                        alert("The data has been updated successfully!");
                    })
                }
                else if(titlenoedit == "" && descriptionnoedit == "")
                {
                    FacilityRef.update({
                        facility_booking_enabled : true,
                        facility_description: description,
                        facility_id:facilityID,
                        facility_image_url: downloadURL,
                        facility_time_description:timedescriptionnoedit,
                        facility_title:title
                    })
                    .then(function() {
                        alert("The data has been updated successfully!");
                    })
                }
                else if(titlenoedit == "" && timedescriptionnoedit == "")
                {
                    FacilityRef.update({
                        facility_booking_enabled : true,
                        facility_description: descriptionnoedit,
                        facility_id:facilityID,
                        facility_image_url: downloadURL,
                        facility_time_description:time_description,
                        facility_title:title
                    })
                    .then(function() {
                        alert("The data has been updated successfully!");
                    })
                }
                else if(descriptionnoedit == "" && timedescriptionnoedit == "")
                {
                    FacilityRef.update({
                        facility_booking_enabled : true,
                        facility_description: description,
                        facility_id:facilityID,
                        facility_image_url: downloadURL,
                        facility_time_description:time_description,
                        facility_title:titlenoedit
                    })
                    .then(function() {
                        alert("The data has been updated successfully!");
                    })
                }
                else if(titlenoedit != "" && descriptionnoedit != "" && timedescriptionnoedit != "")
                {
                    FacilityRef.update({
                        facility_booking_enabled : true,
                        facility_description: descriptionnoedit,
                        facility_id:facilityID,
                        facility_image_url: downloadURL,
                        facility_time_description:timedescriptionnoedit,
                        facility_title:titlenoedit
                    })
                    .then(function() {
                        alert("The data has been updated successfully!");
                    })
                }
                else
                {
                    alert("Please fill at least one of the field");
                }
            });
        });
    }
    $("#SaveDetails").prop('disabled', true);
    $("#DeleteDetails").prop('disabled', true);
}