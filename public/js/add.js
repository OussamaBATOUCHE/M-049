//generate document key
function newKey(docs){
  return firebase.database().ref(docs).push().key;
}


 // add a new post
function addPiligrim( passportID , nationalID , fullName , sex , email , country , language , mobileNumber ,age) {
  Id = newKey('piligrim_user');
  firebase.database().ref('piligrim_user/' + Id).set({
    passportID : passportID ,
    nationalID : nationalID ,
    fullName : fullName ,
    sex : sex ,
    email : email ,
    country : country ,
    language : language ,
    mobileNumber : mobileNumber,
    age : age
  });
  console.log('piligrim Created !');
  return Id;
}

function addHospital( name , long , lat ) {
  Id = newKey('Hospital');
  firebase.database().ref('Hospital/' + Id).set({
    name : name ,
    long : long ,
    lat : lat
  });
  console.log('Hospital Created !');
  return Id;
}

function addMedicalStaff( name , email , password , mobileNumber , language , major ,hID) {
  Id = newKey('MedicalStaff');
  firebase.database().ref('MedicalStaff/' + Id).set({
    name : name ,
    email : email ,
    password : password ,
    mobileNumber : mobileNumber,
    language : language,
    major : major,
    hospitalID : hID
  });
  console.log('Medical staff Created !');
  return Id;
}

function addSOS( piligrim , lat , long , risq_level  ) {
  Id = newKey('sos');
  var currentdate = new Date();
  var datetime = currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/"
                + currentdate.getFullYear() + " @ "
                + currentdate.getHours() + ":"
                + currentdate.getMinutes() + ":"
                + currentdate.getSeconds();
  firebase.database().ref('sos/' + Id).set({
    piligrim : piligrim ,
    lat  : lat,
    long : long,
    risq_level : risq_level,
    medic_staf_ID : 0,
    dateTime : datetime,
    okOrNot : 0
  });
  console.log('SOS Created !');
}

//read data
function readPiligram(x){
  var dbRefObject = firebase.database().ref('piligram_user/');
  //starCountRef.on('value', snap => console.log(snap.val()));
  //var dbRefList = dbRefObject.('posts/');


  //select element
  //const preObject = document.getElementById('t');
  const myList = document.getElementById('box');

  var th = `<div class="box-header">
                <h3 class="box-title">Mes Annonces</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Nombre de Commentaire</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                  </tr>
                  </thead>
                  <tbody>`;

  var thEnd = `</tfoot>
                  </table>
                  </div>
                  <!-- /.box-body -->
                  </div>`;

  //create refrences
  //var posts = dbRefList.child('posts');

  //sunch object changes
//  dbRefObject.on('value',snap => {
  //  preObject.innerText = JSON.stringify(snap.val());
  //});

  //sync items changes
  var t ='bnb';
    dbRefObject.on('value', function(snapshot) {
        snapshot.forEach(function(childSnapshot) {
          //var childKey = childSnapshot.key;
          //var childData = snapshot.val().title;
          console.log(childSnapshot.val().title);
          t = childSnapshot.val().title;
          th= th+'<tr><td>'+childSnapshot.val().Id+'</td><td>'+childSnapshot.val().title+'</td><td>'+childSnapshot.val().title+'</td><td><a href="#" class="btn btn-warning">M</a></td><td><a href="#" class="btn btn-error">S</a></td></tr>';

          //li.id  = snap.key
        });
      });
    //  th.concat(thEnd);
      x.innerHTML = th;

      //console.log(t);

//var postsOfStore4 = firebase.database().ref('posts/' + '-L8FE9G0rSONvXJRi3yF').orderByChild('idStore');

}





// add a new store
function addUser( Id = newKey('users') , name , imgURL , email , password , adr  ) {
 firebase.database().ref('users/' + Id).set({
   name : name ,
   imgURL : imgURL ,
   email : email ,
   password : password ,
   adresse : adr
   //funtion to upload IMG
 });
}


// add a comment for a given post
function addComment(Id , description , date , idUser , idStore , iDPost  ) {
  firebase.database().ref('comments/' + Id).set({
    description : description ,
    date : date ,
    idUser : idUser ,
    idStore : idStore ,
    iDPost : iDPost
  });
}

//  add a reply for a given comment
function addReply(Id , description , date , idUser , idStore , iDComment  ) {
  firebase.database().ref('replys/' + Id).set({
    description : description ,
    date : date ,
    idUser : idUser ,
    idStore : idStore ,
    iDComment : iDComment
  });
}
