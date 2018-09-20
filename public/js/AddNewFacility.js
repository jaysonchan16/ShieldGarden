var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var selected_file;

$(document).ready(function(){
    loadDetails();

    $("#Add").off('click').on('click', function(){
        AddNewFacility();
    });
});

function loadDetails()
{
    firebase.auth().onAuthStateChanged(function(user) {
    if (!user) {
        window.location = 'login.html';
        }
        $('#userprofile').html(user.email);

    });
}

function AddNewFacility()
{
    // console.log(propertyID);
    // console.log(unitID);
    var name = $("#name").val();
    var description = $("#description").val();
    // var fileButton = $("#fileButton");

    // var blob = new Blob([selected_file], { type: "image/jpeg" });
    // var filename = selected_file.name;
    // var storageRef = firebase.storage().ref(filename);
    // var uploadTask = storageRef.put(blob);

    // uploadTask.on('state_changed',
    // function progress(snapshot){
    //     var percentage = (snapshot.byteTransferred / snapshot.totalBytes) * 100;
    //     uploader.value = percentage;
    //     console.log(percentage)
    // }, function error(error){

    // }, function complete(){
        
    // });
    // console.log(propertyID);
    // console.log(selected_file);
    // fileButton.addEventListener('change',function(e){
    //     var file = e.target.files[0];

    //     var storageRef = firebase.storage().ref(file.name);

    //     var task = storageRef.put(file);

    //     task.on('state_changed',

    //         function progress(snapshot)
    //         {

    //         },
    //         function error(err)
    //         {

    //         },
    //         function complete()
    //         {

    //         }
    //     )
    // })
    var blob = new Blob([selected_file], { type: "image/jpg" });
    var filename = selected_file.name;
    var storageRef = firebase.storage().ref(filename);
    var uploadTask = storageRef.put(blob);

    uploadTask.on('state_changed',function(snapshot){

    },function(error){

    },function(){
        var downloadURL = uploadTask.snapshot.downloadURL;

        var propertydocRef = db.collection("properties").doc(propertyID).collection("facilities");

        propertydocRef.add({
            facility_booking_enabled : true,
            facility_description: description,
            facility_id:"",
            facility_image_url: downloadURL,
            facility_time_description:"",
            facility_title:name
        })
        .then(function() {
            alert("The data has been saved successfully!");
        })

    })

    
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