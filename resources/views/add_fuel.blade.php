@extends('layouts/main')
@section('content')
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Fuel Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <form class="form-horizontal" method="post" action="/vehicle/addfuel"> 
    {!! csrf_field() !!}
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
        	<!-- /.box -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Fuel Details</h3>
            </div>
            <div class="box-body">
              <!-- form start -->
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <div class="form-group @if ($errors->has('vehicleno')) has-error @endif">
                  <label for="inputVehicleno" class="col-sm-4 control-label">Vehicle No.</label>
                  <div class="col-sm-8">
        
                    <select class="form-control" id="inputvehicleno" name="vehicleno">
                      <option value="">Vehicle No.</option>
                      @foreach($vehicles as $vehicle)
                      <option value="{{ $vehicle->id }}">{{ $vehicle->vehiclename.'-('.$vehicle->vehicleno.')' }}</option>
                      @endforeach'
                    </select>
                    @if ($errors->has('vehicleno')) <p class="help-block">{{ $errors->first('vehicle') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('fuelquantity')) has-error @endif">
                  <label for="inputfuelquantity" class="col-sm-4 control-label">Fuel Quantity(in litters)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputfuelquantity" placeholder="Fuel quantity" name="fuelquantity">
                    @if ($errors->has('fuelquantity')) <p class="help-block">{{ $errors->first('fuelquantity') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('fuelamount')) has-error @endif">
                  <label for="inputfuelamount" class="col-sm-4 control-label">Fuel Amount</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputfuelamount" placeholder="Fuel Amount" name="fuelamount">
                    @if ($errors->has('fuelamount')) <p class="help-block">{{ $errors->first('fuelamount') }}</p> @endif
                  </div>
                </div>

                <div class="form-group date @if ($errors->has('date')) has-error @endif">
                  <label for="inputdate" class="col-sm-4 control-label">Date</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control datepicker" id="inputdate" placeholder="date" name="date">
                    @if ($errors->has('date')) <p class="help-block">{{ $errors->first('date') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('billno')) has-error @endif">
                  <label for="inputbillno" class="col-sm-4 control-label">Bill no./Recept no.</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="inputbillno" placeholder="Bill no./Recept no." name="billno"> 
                    @if ($errors->has('billno')) <p class="help-block">{{ $errors->first('billno') }}</p> @endif
                  </div>
                </div>

                 <div class="form-group">
                  <label for="input" class="col-sm-4 control-label"></label>
                   <div class="col-sm-8">
                  <input type="submit" class="btn btn-primary btn-block" name="submit_fuel" value="Submit">
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