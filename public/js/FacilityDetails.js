var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var facilityID = sessionStorage.getItem("facilityID");
var selected_file;
var FacilityRef;
var SlotFacilityRef;

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

        reader.readAsDataURL(input.files[0]);
    }
}

function SaveDetails()
{

    $("#SaveDetails").prop('disabled', true);
    $("#DeleteDetails").prop('disabled', true);
}