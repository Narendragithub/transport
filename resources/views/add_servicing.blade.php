@extends('layouts/main')
@section('content')
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Servicing/Repairing Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <form class="form-horizontal" method="post" action="/vehicle/addservicing"> 
    {!! csrf_field() !!}
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
        	<!-- /.box -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Servicing/Repairing Details</h3>
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
                      @endforeach
                    </select>
                    @if ($errors->has('vehicleno')) <p class="help-block">{{ $errors->first('vehicle') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('autopart_name')) has-error @endif">
                  <label for="inputautopart_name" class="col-sm-4 control-label">Autoparts Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputautopart_name" placeholder="Autoparts Name" name="autopart_name" value="{{ Input::old('autopart_name') }}">
                    @if ($errors->has('autopart_name')) <p class="help-block">{{ $errors->first('autopart_name') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('autopart_contactno')) has-error @endif">
                  <label for="inputautopart_contactno" class="col-sm-4 control-label">Autoparts Contactno.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputautopart_contactno" placeholder="Autoparts Contactno." name="autopart_contactno" value="{{ Input::old('autopart_contactno') }}">
                    @if ($errors->has('autopart_contactno')) <p class="help-block">{{ $errors->first('autopart_contactno') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('city')) has-error @endif">
                  <label for="inputautopart_city" class="col-sm-4 control-label">Autoparts City</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputautopart_city" placeholder="Autoparts City" name="city" value="{{ Input::old('city') }}">
                    @if ($errors->has('city')) <p class="help-block">{{ $errors->first('city') }}</p> @endif
                  </div>
                </div>

                 <div class="form-group @if ($errors->has('oil_change')) has-error @endif">
                  <label for="inputoil_change" class="col-sm-4 control-label">Oil Change</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="inputoil_change" name="oil_change">
                      <option value="no">No</option>
                      <option value="yes">Yes</option>
                    </select>
                    @if ($errors->has('oil_change')) <p class="help-block">{{ $errors->first('oil_change') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('oil_amount')) has-error @endif">
                  <label for="inputoil_amount" class="col-sm-4 control-label">Oil Amount</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputoil_amount" placeholder="Oil Amount" name="oil_amount" value="{{ Input::old('oil_amount') }}">
                    @if ($errors->has('oil_amount')) <p class="help-block">{{ $errors->first('oil_amount') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('change_parts')) has-error @endif">
                  <label for="inputchange_parts" class="col-sm-4 control-label">Parts Change</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="inputchange_parts" name="change_parts">
                      <option value="no">No</option>
                      <option value="yes">Yes</option>
                    </select>
                    @if ($errors->has('change_parts')) <p class="help-block">{{ $errors->first('change_parts') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('change_parts_name')) has-error @endif">
                  <label for="inputchange_parts_name" class="col-sm-4 control-label">Change Partsname</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputchange_parts_name" placeholder="Change Parts Name" name="change_parts_name" value="{{ Input::old('change_parts_name') }}">
                    @if ($errors->has('change_parts_name')) <p class="help-block">{{ $errors->first('change_parts_name') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('parts_amount')) has-error @endif">
                  <label for="inputparts_amount" class="col-sm-4 control-label">Parts Amount</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputparts_amount" placeholder="Change Parts Amount" name="parts_amount" value="{{ Input::old('parts_amount') }}">
                    @if ($errors->has('parts_amount')) <p class="help-block">{{ $errors->first('parts_amount') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('bill_no')) has-error @endif">
                  <label for="inputbill_no" class="col-sm-4 control-label">Bill no./Receipt no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputbill_no" placeholder="Bill no./Receipt no." name="bill_no" value="{{ Input::old('bill_no') }}">
                    @if ($errors->has('bill_no')) <p class="help-block">{{ $errors->first('bill_no') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('bill_amount')) has-error @endif">
                  <label for="inputbill_amount" class="col-sm-4 control-label">Bill Total Amount</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputbill_amount" placeholder="Bill Total Amount" name="bill_amount" value="{{ Input::old('bill_amount') }}">
                    @if ($errors->has('bill_amount')) <p class="help-block">{{ $errors->first('bill_amount') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('paid_amount')) has-error @endif">
                  <label for="inputpaid_amount" class="col-sm-4 control-label">Paid Amount</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputpaid_amount" placeholder="Paid Amount" name="paid_amount" value="{{ Input::old('paid_amount') }}">
                    @if ($errors->has('paid_amount')) <p class="help-block">{{ $errors->first('paid_amount') }}</p> @endif
                  </div>
                </div>

                 <div class="form-group @if ($errors->has('remaining_amount')) has-error @endif">
                  <label for="inputremaining_amount" class="col-sm-4 control-label">Remaining  Amount</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputremaining_amount" placeholder="Remaining Amount" name="remaining_amount" value="{{ Input::old('remaining_amount') }}">
                    @if ($errors->has('remaining_amount')) <p class="help-block">{{ $errors->first('remaining_amount') }}</p> @endif
                  </div>
                </div>


                <div class="form-group date @if ($errors->has('servicing_date')) has-error @endif">
                  <label for="inputservicing_date" class="col-sm-4 control-label">Servicing Date</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control datepicker" id="inputservicing_date" placeholder="Servicing Date" name="servicing_date" value="{{ Input::old('servicing_date') }}">
                    @if ($errors->has('servicing_date')) <p class="help-block">{{ $errors->first('servicing_date') }}</p> @endif
                  </div>
                </div>

                 <div class="form-group">
                  <label for="input" class="col-sm-4 control-label"></label>
                   <div class="col-sm-8">
                  <input type="submit" class="btn btn-primary btn-block" name="submit_servicing" value="Submit">
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