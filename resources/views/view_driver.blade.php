@extends('layouts/main')
@section('content')
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Driver Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
        	<!-- /.box -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Driver Details</h3>
            </div>
            <div class="box-body">
               <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th >Driver Name</th>
                      <td>{{$driver->drivername}}</td>
                    </tr>
                    <tr>
                      <th >Driver PhoneNo.</th>
                      <td>{{$driver->phone}}</td>
                    </tr>
                    <tr>
                      <th >Salary</th>
                      <td>{{$driver->salary}}</td>
                    </tr>
                    <tr>
                      <th >Address</th>
                      <td>{{$driver->address}}</td>
                    </tr>
                    
                  </tbody>
              </table>
         
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop  