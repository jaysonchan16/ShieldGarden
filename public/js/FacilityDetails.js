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
var SlotRef;
var slotId= [];

$(document).ready(function(){
    loadDetails();

    $('.datetimepicker').datetimepicker({
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
        }
    });
    

    $("#EditFacility").off('click').on('click', function(){
        EditFacility();
    });

    $("#SaveDetails").off('click').on('click', function(){
        SaveDetails();
    });

    $("#mainPage").off('click').on('click', function(){
        window.location = 'Facilities.html';
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
    firebase.auth().onAuthStateChanged(function(user) {
    if (!user) {
        window.location = 'login.html';
        }
        $('#userprofile').html(user.email);
        FacilityRef = db.collection("properties").doc(propertyID).collection("facilities").doc(facilityID);
        
        facilityData();

        SlotFacilityRef = db.collection("properties").doc(propertyID).collection("facilities").doc(facilityID).collection("facility_slots");
        
        SlotData(1);
    });
}

function EditFacility()
{
    $("#name").val("");
    $("#description").val("");
    $("#timedescription").val("");
    $("#timepicker").show();
    $("#SaveDetails").prop('disabled', false);
    $("#DeleteDetails").prop('disabled', false);
    $("#nonedit").hide();
    $("#edit").show();
}

function readURL(input) {
    
    if (input.files && input.files[0] !=null) {
        var reader = new FileReader();

        reader.onload = function (e) {
            
            $('#blah')
                .attr('src', e.target.result)
                .height(200);
        };
        
        
        selected_file = input.files[0];
        reader.readAsDataURL(input.files[0]);
        
        console.log(input.files[0]);
    }

}

function SaveDetails()
{
    var titlenoedit = $("#name").val();
    var descriptionnoedit = $("#description").val();
    var timedescriptionnoedit = $("#timedescription").val();
    
    
    if(selected_file == null)
    {
        update(titlenoedit,descriptionnoedit,timedescriptionnoedit,oldPhotoURL);
    }
    else
    {
        var filename = selected_file.name;
        var storageRef = firebase.storage().ref(filename);
        var uploadTask = storageRef.put(selected_file);
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
                update(titlenoedit,descriptionnoedit,timedescriptionnoedit,downloadURL);
                console.log("1");
            });
        });
    }

    $("#SaveDetails").prop('disabled', true);
    $("#DeleteDetails").prop('disabled', true);
    $("#timepicker").hide();
    $("#nonedit").show();
    $("#edit").hide();
}

function facilityData()
{
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
}

function add()
{
    var addOne = (slotId.length) + 2;
    var addOneString = addOne.toString();
    var start = $("#start").val();
    var end = $("#end").val();
    var slotDescription = $("#SlotDescription").val();
    // console.log(addOne);
    // console.log(propertyID);
    // console.log(facilityID);
    // console.log(start);
    // console.log(slotDescription);
    var timeStart = new Date(start).getTime();
    var timeEnd = new Date(end).getTime();
    var diff =(timeEnd - timeStart) / 1000;
    diff /= 60;
    var minutes = Math.abs(Math.round(diff));
    SlotRef = db.collection("properties").doc(propertyID).collection("facilities").doc(facilityID).collection("facility_slots").doc(addOneString);

    SlotRef.set({
        slot_end_time: end,
        slot_id : addOneString,
        slot_interval : minutes,
        slot_start_time : start,
        slot_title : slotDescription
    })
    .then(function()
    {
        alert("Slot has been saved successfully");
    })

    SlotData(2);

}

function removeSlot(id)
{
    db.collection("properties").doc(propertyID).collection("facilities").doc(facilityID).collection("facility_slots").doc(id).delete().then(function() {
        alert("Slot successfully deleted!");
    }).catch(function(error) {
        console.error("Error removing document: ", error);
    });
    SlotData(2);
}

function SlotData(num)
{
    if(num == 1)
    {
        slotId=[];
        SlotFacilityRef.get().then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                slotId.push(doc.id);
                $("#slottable").append("<tr><td>"+doc.data().slot_id+"</td><td>"+doc.data().slot_title+"</td><td>"+doc.data().slot_start_time+
                "</td><td>"+doc.data().slot_end_time+"</td><td>"+doc.data().slot_interval+"</td><td><a href='javascript:void(0);' onclick='removeSlot(this.id);' id='"+doc.data().slot_id+"' class='remove'><i class='material-icons'>remove_circle_outline</i></a></td></tr>");
            });
        });
    }
    else
    {
        $("#slottable").html("");
        slotId=[];
        SlotFacilityRef.get().then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                slotId.push(doc.id);
                console.log(doc.id);
                $("#slottable").append("<tr><td>"+doc.data().slot_id+"</td><td>"+doc.data().slot_title+"</td><td>"+doc.data().slot_start_time+
                "</td><td>"+doc.data().slot_end_time+"</td><td>"+doc.data().slot_interval+"</td><td><a href='javascript:void(0);' onclick='removeSlot(this.id);' id='"+doc.data().slot_id+"' class='remove'><i class='material-icons'>remove_circle_outline</i></a></td></tr>");
            });
        });
    }
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

function update(titlenoedit,descriptionnoedit,timedescriptionnoedit,downloadURL)
{
    if(titlenoedit == "")
        {
            if(titlenoedit == "" && descriptionnoedit == "")
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
                    facilityData();
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
                    facilityData();
                    alert("The data has been updated successfully!");
                })
            }
            else if(descriptionnoedit == "" && timedescriptionnoedit == "")
            {
                facilityData();
                alert("Please fill in at least one field!");
            }
            else
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
                    facilityData();
                    alert("The data has been updated successfully!");
                })
            }
        }
        else if(descriptionnoedit == "")
        {
            if(titlenoedit == "" && descriptionnoedit == "")
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
                    facilityData();
                    alert("The data has been updated successfully!");
                })
            }
            else if(titlenoedit == "" && timedescriptionnoedit == "")
            {
                facilityData();
                alert("Please fill in at least one field!");
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
                    facilityData();
                    alert("The data has been updated successfully!");
                })
            }
            else
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
                    facilityData();
                    alert("The data has been updated successfully!");
                })
            }
        }
        else if(timedescriptionnoedit == "")
        {
            if(titlenoedit == "" && descriptionnoedit == "")
            {
                alert("Please fill in at least one field!");
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
                    facilityData();
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
                    facilityData();
                    alert("The data has been updated successfully!");
                })
            }
            else
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
                    facilityData();
                    alert("The data has been updated successfully!");
                })
            }
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
                facilityData();
                alert("The data has been updated successfully!");
            })
        }
        else
        {
            facilityData();
            alert("Please fill at least one of the field");
        }
}