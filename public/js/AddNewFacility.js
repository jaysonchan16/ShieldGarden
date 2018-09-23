var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var selected_file;
var ref = firebase.storage().ref();
var metadata = {
    contentType: 'image/jpg'
};

$(document).ready(function(){
    loadDetails();

    $("#file-submit").off('click').on('click', function(){
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

    var propertydocRef = db.collection("properties").doc(propertyID).collection("facilities").doc();

    var filename = selected_file.name;
    //var storageRef = firebase.storage.ref(filename);
    //var uploadTask = storageRef.put(selected_file);
    var uploadTask = ref.child(filename).put(selected_file,metadata);

    uploadTask
    .then(snapshot => snapshot.ref.getDownloadURL())
    .then((url) => {
        console.log(url)
    })
//     uploadTask.on('state_changed',function(snapshot){

//     }, function(error) {

//     }, function() {
//         var downloadURL = uploadTask.snapshot.downloadURL;
//         propertydocRef.set({
//                 facility_booking_enabled : true,
//                 facility_description: description,
//                 facility_id:propertydocRef.id,
//                 facility_image_url: downloadURL,
//                 facility_time_description:"",
//                 facility_title:name
//         }).then(function() {
//             var ID = propertydocRef.id;
//         })
// });
     
    
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