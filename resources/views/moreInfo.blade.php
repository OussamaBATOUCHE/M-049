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
        Mor infos:
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
      <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Meccah requests</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Piligrim</th>
                  <th>Country</th>
                  <th>Date</th>
                  <th>Hospital</th>
                  <th>OK</th>
                  <th style="width: 40px">Risk Level</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Amine Mouhame</td>
                  <td>Algeria</td>
                  <td>12-08-2018 12:21</td>
                  <td>jeddah</td>
                  <td>/</td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Amine Mouhame</td>
                  <td>Oman</td>
                  <td>12-08-2018 12:21</td>
                  <td>Mena</td>
                  <td>/</td>
                  <td><span class="badge bg-green">55%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Amine Mouhame</td>
                  <td>USA</td>
                  <td>23-08-2018 12:21</td>
                  <td>jeddah</td>
                  <td>/</td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Amine Mouhame</td>
                  <td>Algeria</td>
                  <td>12-08-2018 12:21</td>
                  <td>jeddah</td>
                  <td>/</td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Amine Mouhame</td>
                  <td>Oman</td>
                  <td>12-08-2018 12:21</td>
                  <td>Mena</td>
                  <td>/</td>
                  <td><span class="badge bg-green">55%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Amine Mouhame</td>
                  <td>USA</td>
                  <td>23-08-2018 12:21</td>
                  <td>jeddah</td>
                  <td>/</td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Amine Mouhame</td>
                  <td>Algeria</td>
                  <td>12-08-2018 12:21</td>
                  <td>jeddah</td>
                  <td>/</td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Amine Mouhame</td>
                  <td>Oman</td>
                  <td>12-08-2018 12:21</td>
                  <td>Mena</td>
                  <td>/</td>
                  <td><span class="badge bg-green">55%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Amine Mouhame</td>
                  <td>USA</td>
                  <td>23-08-2018 12:21</td>
                  <td>jeddah</td>
                  <td>/</td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>

              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('layout.footer')
