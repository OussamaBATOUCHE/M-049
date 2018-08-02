


/// listening for a value
var starCountRef = firebase.database().ref('comment/' + 0 + '/title');
starCountRef.on('value', function(snapshot) {
  msg.innerHTML =  snapshot.val();
});

//addPost( newPostKey , "oussama2" );

function addPost( Id, title  ) {
  firebase.database().ref('comment/' + Id).set({
    title : title
  });
}

 var table = 'comment/';
 /*
var x =  firebase.database().ref(table ).on('value' , function(snapshot) {
  console.log(snapshot.val());
  msg.innerHTML = snapshot.val()[2].title;
  comments = snapshot.val() ;
});
*/

// delete a comment
function deletComment( idComment ){
    var x =  firebase.database().ref(table + idComment ).remove();
    msg.innerHTML = "deleted !";
}



// authentification
function authen( email , password ){
firebase.auth().createUserWithEmailAndPassword(email, password).then(function(result) {
    msg.innerHTML =  "authentificated !";
}).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  console.log(errorMessage);
  msg.innerHTML =  errorMessage;
  // ...
});

}


signIn('mail@gmail.com' , '1234567892');
// sign in an existing user
function signIn( email , password ){
firebase.auth().signInWithEmailAndPassword(email, password).then(function(result) {
    msg.innerHTML =  "authentificated !";
}).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  msg.innerHTML =  errorMessage;
  // ...
});
}
