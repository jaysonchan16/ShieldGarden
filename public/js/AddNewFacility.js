var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var storage = firebase.storage();
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

    var propertydocRef = db.collection("properties").doc(propertyID).collection("facilities").doc();

    var filename = selected_file.name;
    var storageRef = firebase.storage().ref(filename);
    var uploadTask = storageRef.put(selected_file);
    uploadTask.on('state_changed',
    
    function(snapshot){

    }, function(error) {

    }, function() {
        uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
            console.log('File available at', downloadURL);
          
            propertydocRef.set({
                    facility_booking_enabled : true,
                    facility_description: description,
                    facility_id:propertydocRef.id,
                    facility_image_url: downloadURL,
                    facility_time_description:"",
                    facility_title:name
            }).then(function() {
                var ID = propertydocRef.id;
                console.log(ID);
            })
    });
});
     
    
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            
            $('#blah')
                .attr('src', e.target.result)
                .height(200);
        };

        selected_file = input.files[0];
      //  console.log(selected_file);
        reader.readAsDataURL(input.files[0]);
    }
}