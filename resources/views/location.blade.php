@include('layout.head')
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  @include('layout.sidenav')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Location:
        <small>Meccah</small>
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14836.48688458715!2d39.150804969775386!3d21.620180050000002!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssa!4v1533212900487" width="600" height="450" frameborder="0" style="border:0;margin: 0 auto; display: block; width: 100%;" allowfullscreen></iframe>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('layout.footer')
