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
        format: 'LT',
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

    $("#CancelDetails").off('click').on('click', function(){
        loadDetails();
        $("#nonedit").show();
        $("#edit").hide();
        $("#FacilityButton").hide();
        $("#timepicker").hide();
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
    $("#FacilityButton").show();
    // $("#SaveDetails").prop('disabled', false);
    // $("#DeleteDetails").prop('disabled', false);
    $("#nonedit").hide();
    $("#edit").show();
    SlotData(2);
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
        var storageRef = firebase.storage().ref();
        var FacilityRef = storageRef.child('properties/'+propertyID+'/facilities_media/'+filename);
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
                update(titlenoedit,descriptionnoedit,timedescriptionnoedit,downloadURL);
                 $("#wait").css("display", "none");
            });
        });
    }
    
    // $("#SaveDetails").prop('disabled', true);
    // $("#DeleteDetails").prop('disabled', true);
    $("#FacilityButton").hide();
    $("#timepicker").hide();
    $("#nonedit").show();
    $("#edit").hide();
}

function facilityData()
{
    $("#wait").css("display", "block");
    FacilityRef.get().then(function(doc) {
        if (doc.exists) {
            console.log("1");
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
            $("#wait").css("display", "none");
        }
        else {
            $("#modalTitle").html("Error Message");
            $("#message").html("Cannot find the data in the database");
            $("#messageModal").modal();
        }
    });
}

function add()
{
    console.log("1")
    $("#wait").css("display", "block");
    var addOne;
    if(slotId.length == 0)
    {
        addOne = 1;
    }
   else
   {
        addOne = (slotId.length) + 1;
   }
    var addOneString = addOne.toString();
    var start = $("#start").val();
    var end = $("#end").val();
    var slotDescription = start +'-'+end;
    console.log(slotDescription);
    // var hourStart = new Date("01/01/2007 " + start).getHours();
    // var hourEnd = new Date("01/01/2007 " + end).getHours();

    // var minuteStart = new Date("01/01/2007 " + start).getMinutes();
    // var minuteEnd = new Date("01/01/2007 " + end).getMinutes();

    var timeStart = new Date("01/01/2007 " + start);
    var timeEnd = new Date("01/01/2007 " + end);

    // var hourDiff = hourEnd - hourStart;
    // var minuteDiff = minuteEnd - minuteStart;
    // if (minuteDiff < 0) {
    //     hourDiff = hourDiff - 1;
    // }
    var diff =(timeEnd.getTime() - timeStart.getTime()) / 1000;
    diff /= 60;
    var minutes = Math.abs(Math.round(diff));

    // var time =(Date.parse('January 1, 1971'+end) - Date.parse('January 1, 1971'+start)) / 60000
    // console.log(time);
    //var time = (hourDiff * 60) + minuteDiff;
   // var day = '1/1/1970 ', // 1st January 1970
    // var difference_ms = end - start;
    // var timeStart = new Date(start).getTime();
    // var timeEnd = new Date(end).getTime();
    // var diff =(timeEnd - timeStart) / 1000;
    // diff /= 60;
    // var minutes = Math.abs(Math.round(diff));
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
        $("#modalTitle").html("Manage Facility");
        $("#message").html("Slot has been saved successfully");
        $("#messageModal").modal();
    })

    SlotData(2);

}

function removeSlot(id)
{
    $("#wait").css("display", "block");
    db.collection("properties").doc(propertyID).collection("facilities").doc(facilityID).collection("facility_slots").doc(id).delete().then(function() {
        $("#modalTitle").html("Manage Facility");
        $("#message").html("Slot successfully deleted!");
        $("#messageModal").modal();
    }).catch(function(error) {
        $("#modalTitle").html("Error Message");
        $("#message").html("Error deleting the message");
        $("#messageModal").modal();
    });
    SlotData(2);
}

function SlotData(num)
{
    if(num == 1)
    {
        $("#slottable tbody").html("");
        slotId=[];
        SlotFacilityRef.get().then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                slotId.push(doc.id);
                $("#slottable").append("<tr><td>"+doc.data().slot_id+"</td><td>"+doc.data().slot_title+"</td><td>"+doc.data().slot_start_time+
                "</td><td>"+doc.data().slot_end_time+"</td><td>"+doc.data().slot_interval+"</tr>");
            });
            $("#wait").css("display", "none");
        });
    }
    else
    {
        console.log("2")
        $("#slottable tbody").html("");
        slotId=[];
        SlotFacilityRef.get().then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                slotId.push(doc.id);
                console.log(doc.id);
                $("#slottable").append("<tr><td>"+doc.data().slot_id+"</td><td>"+doc.data().slot_title+"</td><td>"+doc.data().slot_start_time+
                "</td><td>"+doc.data().slot_end_time+"</td><td>"+doc.data().slot_interval+"</td><td class='delete'><a href='javascript:void(0);' onclick='removeSlot(this.id);' id='"+doc.data().slot_id+"' class='remove'><i class='material-icons'>remove_circle_outline</i></a></td></tr>");
            });
            $("#wait").css("display", "none");
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
        $("#modalTitle").html("Error Message");
        $("#message").html("Cannot logout");
        $("#messageModal").modal();
  });
}

function update(titlenoedit,descriptionnoedit,timedescriptionnoedit,downloadURL)
{
    if(titlenoedit == "")
    {
            if(titlenoedit == "" && descriptionnoedit == "")
            {
                if(timedescriptionnoedit == "")
                {
                    FacilityRef.update({
                        facility_booking_enabled : true,
                        facility_description: description,
                        facility_id:facilityID,
                        facility_image_url: downloadURL,
                        facility_time_description:time_description,
                        facility_title:title
                    })
                    .then(function() {
                        facilityData();
                        $("#modalTitle").html("Manage Facility");
                        $("#message").html("The data has been updated successfully!");
                        $("#messageModal").modal();
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
                        facility_title:title
                    })
                    .then(function() {
                        facilityData();
                        $("#modalTitle").html("Manage Facility");
                        $("#message").html("The data has been updated successfully!");
                        $("#messageModal").modal();
                    })
                }
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
                    $("#modalTitle").html("Manage Facility");
                    $("#message").html("The data has been updated successfully!");
                    $("#messageModal").modal();
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
                    $("#modalTitle").html("Manage Facility");
                    $("#message").html("The data has been updated successfully!");
                    $("#messageModal").modal();
                })
            }
        }
        else if(descriptionnoedit == "")
        {
            console.log("7");
            if(titlenoedit == "" && descriptionnoedit == "")
            {
                console.log("8");
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
                    $("#modalTitle").html("Manage Facility");
                    $("#message").html("The data has been updated successfully!");
                    $("#messageModal").modal();
                })
            }
            else if(titlenoedit == "" && timedescriptionnoedit == "")
            {
                console.log("9");
                facilityData();
                alert("Please fill in at least one field!");
            }
            else if(descriptionnoedit == "" && timedescriptionnoedit == "")
            {
                console.log("10");
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
                    $("#modalTitle").html("Manage Facility");
                    $("#message").html("The data has been updated successfully!");
                    $("#messageModal").modal();
                })
            }
            else
            {
                console.log("11");
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
                    $("#modalTitle").html("Manage Facility");
                    $("#message").html("The data has been updated successfully!");
                    $("#messageModal").modal();
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
                console.log("14");
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
                    $("#modalTitle").html("Manage Facility");
                    $("#message").html("The data has been updated successfully!");
                    $("#messageModal").modal();
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
                    $("#modalTitle").html("Manage Facility");
                    $("#message").html("The data has been updated successfully!");
                    $("#messageModal").modal();
                })
            }
            else
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
                    $("#modalTitle").html("Manage Facility");
                    $("#message").html("The data has been updated successfully!");
                    $("#messageModal").modal();
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
                $("#modalTitle").html("Manage Facility");
                $("#message").html("The data has been updated successfully!");
                $("#messageModal").modal();
            })
        }
        else
        {
            facilityData();
            $("#modalTitle").html("Manage Facility");
            $("#message").html("Please fill up at least one field!");
            $("#messageModal").modal();
        }
}