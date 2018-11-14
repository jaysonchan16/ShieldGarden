var db = firebase.firestore();
var propertyID;
var unitID;
var findID;
var deleteID;
var deleteName;
var deleteEmail;

$(document).ready(function(){
    loadDetails();

    $("#DeleteUser").off('click').on('click', function(){
        deleteUser();
    });
    /*$("#Search").off('click').on('click', function(){
        var value = $("#SearchText").val();
        console.log(value);
        $(".table tbody tr").filter(function() {
            console.log($("#SearchText").text().toLowerCase().indexOf(value) > -1);
            $("#SearchText").toggle($("#SearchText").text().toLowerCase().indexOf(value) > -1)
          });
    });*/

    $("#SearchText").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".table tbody tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

    $("#AddNewUser").off('click').on('click', function(){
        sessionStorage.setItem("propertyID",propertyID);
        sessionStorage.setItem("unitID",unitID);
        window.location = 'AddNewUser.html';
    });

    $("#manageButton").off('click').on('click', function(){
        loadDetails();
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
        
        sessionStorage.removeItem("propertyID");
        sessionStorage.removeItem("unitID");
        sessionStorage.removeItem("findEmail");

        var userId = user.uid;

        var userdocRef = db.collection("users").doc(userId);

        userdocRef.get().then(function(doc) {
            if (doc.exists) {
                propertyID = doc.data().property_id;
                //unitID = doc.data().unit_id; 
               property(propertyID);
            }
            else {
                $("#errorTitle").html("Error Message");
                $("#errorMessage").html("Cannot find this user in database");
                $("#errorModal").modal();
                // doc.data() will be undefined in this case
                //console.log("No such document!");
            }
        });
    });
}

function property(propertyID)
{
    $(".table tbody").html("");
    var propertyName = db.collection("properties").doc(propertyID);

    // hardcode and pass the property name to the AddNewUser page and UpdateUser page
    propertyName.get().then(function(doc){
        if (doc.exists) {
           // console.log("Document data:", doc.data());
            sessionStorage.setItem("propertyName",doc.data().property_name);
        } else {
            $("#errorTitle").html("Error Message");
            $("#errorMessage").html("Cannot get the document");
            $("#wait").css("display", "none");
            $("#errorModal").modal();
        }
    }).catch(function(error) {
        //console.log("Error getting document:", error);
        $("#errorTitle").html("Error Message");
        $("#errorMessage").html("Cannot get the document");
        $("#wait").css("display", "none");
        $("#errorModal").modal();
    });
    var membersRef = db.collection("properties").doc(propertyID).collection("property_members");
    membersRef.get().then(function(querySnapshot){
        querySnapshot.forEach(function(doc){
            $(".table tbody").append("<tr><td class='name findButton' id='"+doc.data().p_member_email+","+doc.data().p_member_unit_id+","+doc.id+"' onclick='details(this.id)'>"+doc.data().p_member_name+"</td><td>"+doc.data().p_member_email+
                        "</td><td>"+doc.data().p_member_number+"</td><td>"+doc.data().p_member_property+
                        "</td><td>"+doc.data().p_member_unit_id+"</td><td class='name findButton' id='"+doc.id+","+doc.data().p_member_name+","+
                        doc.data().p_member_email+"' onclick='deletes(this.id)'>Delete</td></tr>");
                });
                $("#AddNewUser").prop("disabled",false);
                $("#wait").css("display", "none");
            });
}

function details(details)
{
    var email = details.split(",")[0];
    var unitID = details.split(",")[1];
    //var unitID = details.split(",")[2];
    sessionStorage.setItem("propertyID",propertyID);
    sessionStorage.setItem("unitID",unitID);
    sessionStorage.setItem("findEmail",email);
    window.location = 'UpdateUser.html';
}

function deletes(ID)
{
    deleteID = ID.split(",")[0];
    deleteName = ID.split(",")[1];
    deleteEmail = ID.split(",")[2];
    $("#deleteModal").modal();
}

function deleteUser()
{
    $("#wait").css("display", "block");
    var propertyRef = db.collection("properties").doc(propertyID).collection("property_members");
    
    var propertyDeleteID;
    var memberDeleteID;
    propertyRef.get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc){
            if(deleteEmail == doc.data().p_member_email)
            {
                memberDeleteID = doc.data().p_member_uid;
                unitID = doc.data().p_member_unit_id;
                propertyDeleteID = doc.id;
            }
        })
        var unitMemberID;
        var deleteUnitMemberRef = db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members");
    
        deleteUnitMemberRef.get().then(function(querySnapshot){
            querySnapshot.forEach(function(doc){
                    if(deleteEmail == doc.data().member_email)
                    {
                        unitMemberID = doc.id;
                    }
                });
        db.collection("properties").doc(propertyID).collection("units").doc(unitID).collection("unit_members").doc(unitMemberID).delete().then(function(){
            db.collection("properties").doc(propertyID).collection("property_members").doc(propertyDeleteID).delete().then(function(){
              //  db.collection("users").doc(memberDeleteID).delete().then(function(){
                    $("#deleteModal").modal("toggle");
                    $("#manageModal").modal();
                    $("#wait").css("display", "none");
                /*}).catch(function(error) {
                    $("#errorTitle").html("Error Message");
                    $("#errorMessage").html("Error for removing");
                    $("#wait").css("display", "none");
                    $("#errorModal").modal();
                });*/
            }).catch(function(error) {
                $("#errorTitle").html("Error Message");
                $("#errorMessage").html("Error for removing");
                $("#wait").css("display", "none");
                $("#errorModal").modal();
            });
        }).catch(function(error) {
            $("#errorTitle").html("Error Message");
            $("#errorMessage").html("Error for removing");
            $("#wait").css("display", "none");
            $("#errorModal").modal();
    });
}); 
    });   
}

function logout()
{
    firebase.auth().signOut()
  .then(function() {
    window.location = 'login.html';
  })
  .catch(function(error) {
    $("#errorTitle").html("Error Message");
    $("#errorMessage").html("Error for logout");
    $("#wait").css("display", "none");
    $("#errorModal").modal();
  });
}