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
        Choose a location:
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="LTE/#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="LTE/#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="blocks">
            <div class="row">
                <div class="col-lg-6 col-xs-6 block">
                            <!-- small box -->
                    <div class="small-box bg-aqua" style="padding-top: 50px;">
                        <div class="inner">
                            <h3>Mena</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <span class="notification-block"
                         data-toggle="modal"
                         data-target="#pligrim-help-modal">1
                        </span>
                        <a href="moreInfo" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>

                    </div>
                </div>
                <div class="col-lg-6 col-xs-6 block">
                        <!-- small box -->
                        <div class="small-box bg-yellow" style="padding-top: 50px;">
                            <div class="inner">
                                <h3>Meccah</h3>
                            </div>
                        <div class="icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <span class="notification-block" data-toggle="modal"
                         data-target="#pligrim-help-modal" id="notif">N/A
                        </span>
                        <a href="moreInfo" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-6 block">
                            <!-- small box -->
                    <div class="small-box bg-red" style="padding-top: 50px;">
                        <div class="inner">
                            <h3>A'arafat</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <span class="notification-block" data-toggle="modal"
                         data-target="#pligrim-help-modal">2
                        </span>
                        <a href="moreInfo" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-xs-6 block">
                            <!-- small box -->

                    <div class="small-box bg-green" style="padding-top: 50px;">
                        <div class="inner">
                            <h3>Muzdalefah</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <span class="notification-block" data-toggle="modal"
                         data-target="#pligrim-help-modal">5
                        </span>
                        <a href="LTE/muzdalefah.php" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Models Here -->
@include('layout.modal-notif')
@include('layout.footer')
