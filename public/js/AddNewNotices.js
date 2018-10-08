var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var selected_file;
var storage = firebase.storage();

$(document).ready(function(){
    loadDetails();

    $("#Add").off('click').on('click', function(){
        addnewnotice();
    });

    $("#mainPage").off('click').on('click', function(){
        window.location = 'Notices.html';
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

function addnewnotice()
{
    var title = $("#title").val();
    var description = $("#description").val();

    var propertydocRef = db.collection("properties").doc(propertyID).collection("notices");
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
              
                propertydocRef.add({
                    notice_description: description,
                    notice_image_url: downloadURL,
                    notice_title:title
                }).then(function() {
                     alert("Adding the new notices successfully!")
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
        reader.readAsDataURL(input.files[0]);
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