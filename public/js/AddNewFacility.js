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
    //$("#myModal").modal();
    // console.log(propertyID);
    // console.log(unitID);
    var name = $("#name").val();
    var description = $("#description").val();

    var propertydocRef = db.collection("properties").doc(propertyID).collection("facilities").doc();

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
          
            propertydocRef.set({
                    facility_booking_enabled : true,
                    facility_description: description,
                    facility_id:propertydocRef.id,
                    facility_image_url: downloadURL,
                    facility_time_description:"",
                    facility_title:name
            }).then(function() {
                var ID = propertydocRef.id;  //when create a new document it will automatically generated new id and then apply the generate id into the facility_id
                alert("Adding the new facility successfully!")
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
        //get the base 64 image
        selected_file = input.files[0];
      //  console.log(selected_file);
        reader.readAsDataURL(input.files[0]);
    }
}