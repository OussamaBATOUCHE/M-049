
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>SOS</b> Hajj
    </div>
    <strong>Copyright &copy; 2018 <a href="LTE/https://adminlte.io">TEAM M-049</a>.</strong> All rights
    reserved.
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="LTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="LTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="LTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="LTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="LTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="LTE/dist/js/demo.js"></script>
<script>
    function details(name,age,lat,long) {
        $("#name-p").html(name);
        $("#age-p").html(age+' Y-A');

         var map,marker;
          map = new google.maps.Map(document.getElementById('map'));
           marker = new google.maps.Marker({
            position:{
              lat:lat,
              lng:long
            },
            map:map
          })
          var pos = {
            lat: lat,
            lng: long
          };
          map.setCenter(pos);
          map.setZoom(15);
    }



  $(document).ready(function () {

    function readSOS(){
      console.log("_>");
      var t=0;

      var dbRefObject = firebase.database().ref('sos/').orderByChild("okOrNot").equalTo(0);
      dbRefObject.on('value', function(snapshot) {
        t=0;
        var cntnt="";
      snapshot.forEach(function(childSnapshot) {
        //notification
        t++;

        $("#notif").html(t);

        //detail of notification
          var plgrmName;
          var plgrm = firebase.database().ref('piligrim_user/'+childSnapshot.val().piligrim).once('value').then(function(snapshot) {
            plgrmName = snapshot.val() && snapshot.val().fullName ;
            plgrmAge = snapshot.val() && snapshot.val().age ;
            var lat = childSnapshot.val().lat;
            var long = childSnapshot.val().long;
            cntnt = cntnt.concat(`<a href="#" class="list-group-item list-group-item-action" onClick="details('`+plgrmName+`',`+plgrmAge+`,`+lat+`,`+long+`)" data-dismiss="modal"data-toggle="modal"
            data-target="#exampleModal">`);
            cntnt = cntnt.concat(plgrmName+`  |  `+plgrmAge+` Y-A | <span class="badge badge-danger">Details</span></a>`);

            $("#sos-list").html(cntnt);
          })


      });
    });
    }
    readSOS();
  })

</script>
</body>
</html>
