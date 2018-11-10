var db = firebase.firestore();
var propertyID = sessionStorage.getItem("propertyID");
var storage = firebase.storage();
var selected_file;

$(document).ready(function(){
    loadDetails();

    $("#Add").off('click').on('click', function(){
        AddNewFacility();
    });

    $("#mainPage").off('click').on('click', function(){
        window.location = 'Facilities.html';
    }); 

    $("#close").off('click').on('click', function(){
        window.location = 'Facilities.html';
    }); 
});

function loadDetails()
{
    $("#wait").css("display", "block");
    firebase.auth().onAuthStateChanged(function(user) {
    if (!user) {
        window.location = 'login.html';
        }
        $('#userprofile').html(user.email);
        $("#wait").css("display", "none");
    });
}

function AddNewFacility()
{
    $("#Add").prop("disabled",true);
    $("#wait").css("display", "block");
    //$("#myModal").modal();
    // console.log(propertyID);
    // console.log(unitID);
    var name = $("#name").val();
    var description = $("#description").val();
    var timedescription = $("#timedescription").val();

    var propertydocRef = db.collection("properties").doc(propertyID).collection("facilities").doc();
    var error = 0;
    
    if(name == "")
    {
        error = 1;
        $("#errorMessage").html("Please fill up the name field!");
        $("#wait").css("display", "none");
        $("#Add").prop("disabled",false);
        $("#errorModal").modal();
    }
    else if(description == "")
    {
        error = 1;
        $("#errorMessage").html("Please fill up the description field!");
        $("#wait").css("display", "none");
        $("#Add").prop("disabled",false);
        $("#errorModal").modal();
    }
    else if(timedescription == "")
    {
        error = 1;
        $("#errorMessage").html("Please fill up the time description field!");
        $("#wait").css("display", "none");
        $("#Add").prop("disabled",false);
        $("#errorModal").modal();
    }
    else if(selected_file == undefined)
    {
        error = 1;
        $("#errorMessage").html("Please upload the picture!");
        $("#wait").css("display", "none");
        $("#Add").prop("disabled",false);
        $("#errorModal").modal();
    }
    else
    {
        error = 0;
    }

    if(error == 0)
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
                    console.log('File available at', downloadURL);
                
                    propertydocRef.set({
                            facility_booking_enabled : true,
                            facility_description: description,
                            facility_id:propertydocRef.id,
                            facility_image_url: downloadURL,
                            facility_time_description:timedescription,
                            facility_title:name
                            //facility_jpg_name:uploadTask.snapshot.metadata.name
                    }).then(function() {
                        var ID = propertydocRef.id;  //when create a new document it will automatically generated new id and then apply the generate id into the facility_id
                        $("#modalTitle").html("Manage Facility");
                        $("#message").html("Successfully added facility.");
                        $("#Add").prop("disabled",false);
                        $("#wait").css("display", "none");
                        $("#addMessageModal").modal();
                    })
            });
        });
    }
     
    
}

function readURL(input) {
    $("#wait").css("display", "block");
    if (input.files && input.files[0]) {
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
        //get the base 64 image
        selected_file = input.files[0];
      //  console.log(selected_file);
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
    $("#errorMessage").html("Cannot logout");
    $("#errorModal").modal();
  });
}