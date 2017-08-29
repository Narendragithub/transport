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
    <form class="form-horizontal" method="post" action="/driver/update"> 
    {!! csrf_field() !!}
    <input type="hidden" name="id" value="{{$driver->id}}">
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
                <div class="form-group @if ($errors->has('drivername')) has-error @endif">
                  <label for="inputDrivername" class="col-sm-4 control-label">Driver Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputDrivername" placeholder="Driver Name" name="drivername" value="{{$driver->drivername}}">
                    @if ($errors->has('drivername')) <p class="help-block">{{ $errors->first('drivername') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('driverphone')) has-error @endif">
                  <label for="inputDriverphone" class="col-sm-4 control-label">Driver Mobile no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputDrivermobileno" placeholder="Driver Mobile no." name="driverphone" value="{{$driver->phone}}">
                    @if ($errors->has('driverphone')) <p class="help-block">{{ $errors->first('driverphone') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('driversalary')) has-error @endif">
                  <label for="inputDriversalary" class="col-sm-4 control-label">Driver Salary</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputDriversalary" placeholder="Driver Salary" name="driversalary" value="{{$driver->salary}}">
                    @if ($errors->has('driversalary')) <p class="help-block">{{ $errors->first('driversalary') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('driveraddress')) has-error @endif">
                  <label for="inputDriveraddress" class="col-sm-4 control-label">Driver Address</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" id="inputDriveraddress" placeholder="Driver Address" name="driveraddress">
                      {{$driver->address}}
                    </textarea> 
                    @if ($errors->has('driveraddress')) <p class="help-block">{{ $errors->first('driveraddress') }}</p> @endif
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