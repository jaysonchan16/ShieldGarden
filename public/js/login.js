$(document).ready(function(){
    $("#submit").click(function(){
        login();
    });
});

function login()
{
    var email = $("#email").val();
    var password= $("#password").val();
    var db = firebase.firestore();
    
    if (firebase.auth().currentUser) {
        // [START signout]
        firebase.auth().signOut();
        // [END signout]
      } else 
      {
        firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
        
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorCode);
        if(errorCode === 'auth/wrong-password')
        {
            alert("Wrong password");
        }
        else
        {
            alert(errorMessage);
        }

      });

      firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            var uid = user.uid;
            var userdocRef = db.collection("users").doc(uid);

            userdocRef.get().then(function(doc) {
                if (doc.exists) {
                    var admin = doc.data().admin;

                    if(admin)
                    {
                        window.location = 'ManageUser.html';
                    }
                    else
                    {
                        alert("Sorry, you do not have access");
                    }
                } else {
                    // doc.data() will be undefined in this case
                    console.log("No such document!");
                }
          
        });
    }
 })
     /* alert(firebase.auth().currentUser);
      window.location = '../../examples/pages/user.html';*/
     /* firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            //
            }
        });*/
      
   /* firebase.auth().signInWithEmailAndPassword(email, password)
    .then((user) => {
        return user;
    })
    .then((user1) => {
       
    })
    .catch(function(err) {
        alert(error.message);
    });*/
    }
}

