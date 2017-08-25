@extends('layouts/main')
@section('content')
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Driver Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <form class="form-horizontal" method="post" action="/adddriver"> 
    {!! csrf_field() !!}
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
              <!-- form start -->
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <div class="form-group">
                  <label for="inputDrivername" class="col-sm-4 control-label">Driver Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputDrivername" placeholder="Driver Name" name="drivername">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputDriverphone" class="col-sm-4 control-label">Driver Mobile no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputDrivermobileno" placeholder="Driver Mobile no." name="driverphone">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputDriveraddress" class="col-sm-4 control-label">Driver Address</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" id="inputDriveraddress" placeholder="Driver Address" name="driveraddress">
                    </textarea> 
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputDriveraddress" class="col-sm-4 control-label"></label>
                   <div class="col-sm-8">
                  <input type="submit" class="btn btn-primary btn-block" name="submit_vehicle" value="Submit">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
      
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop  