@extends('layouts/main')
@section('content')
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Vehicle Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>
  
    <!-- Main content -->
    <form class="form-horizontal" method="post" action="/addvehicle"> 
    {!! csrf_field() !!}
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Basic Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
              	<div class="form-group @if ($errors->has('vehiclename')) has-error @endif">
                  <label for="inputVehiclename" class="col-sm-4 control-label">Vehicle Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputVehiclename" placeholder="Vehicle Name (Gaadi ka naam)" name="vehiclename" value="{{ Input::old('vehiclename') }}">
                  	@if ($errors->has('vehiclename')) <p class="help-block">{{ $errors->first('vehiclename') }}</p> @endif
                  </div>
                </div>
                <div class="form-group @if ($errors->has('vehicleno')) has-error @endif">
                  <label for="inputVehicleno" class="col-sm-4 control-label">Vehicle No.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputVehicleno" placeholder="Vehicle Number (Gaadi no.)" name="vehicleno" value="{{ Input::old('vehicleno') }}">
                  	@if ($errors->has('vehicleno')) <p class="help-block">{{ $errors->first('vehicleno') }}</p> @endif
                  </div>
                </div>
                <div class="form-group @if ($errors->has('vcompanyname')) has-error @endif">
                  <label for="inputCompanyname" class="col-sm-4 control-label">Company Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputCompanyName" placeholder="Company Name" name="vcompanyname" value="{{ Input::old('vcompanyname') }}">
                  	@if ($errors->has('vcompanyname')) <p class="help-block">{{ $errors->first('vcompanyname') }}</p> @endif
                  </div>
                </div>
                <div class="form-group @if ($errors->has('vcompanycode')) has-error @endif">
                  <label for="inputCompanycode" class="col-sm-4 control-label">Company Code</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputCompanyCode" placeholder="Company Code" name="vcompanycode" value="{{ Input::old('vcompanycode') }}">
                  	@if ($errors->has('vcompanycode')) <p class="help-block">{{ $errors->first('vcompanycode') }}</p> @endif
                  </div>
                </div>
                <div class="form-group @if ($errors->has('modelno')) has-error @endif">
                  <label for="inputModelno" class="col-sm-4 control-label">Model no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputModelno" placeholder="Model Number" name="modelno" value="{{ Input::old('modelno') }}">
                  	@if ($errors->has('modelno')) <p class="help-block">{{ $errors->first('modelno') }}</p> @endif
                  </div>
                </div>
                <div class="form-group @if ($errors->has('engineno')) has-error @endif">
                  <label for="inputEngineno" class="col-sm-4 control-label">Engine no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEngineno" placeholder="Engine Number" name="engineno" value="{{ Input::old('engineno') }}">
                  	@if ($errors->has('engineno')) <p class="help-block">{{ $errors->first('engineno') }}</p> @endif
                  </div>
                </div>
                <div class="form-group @if ($errors->has('chasisno')) has-error @endif">
                  <label for="inputChasisno" class="col-sm-4 control-label">Chasis no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputChasisno" placeholder="Chasis Number" name="chasisno" value="{{ Input::old('chasisno') }}">
                  	@if ($errors->has('chasisno')) <p class="help-block">{{ $errors->first('chasisno') }}</p> @endif
                  </div>
                </div>
                <div class="form-group @if ($errors->has('permittype')) has-error @endif">
                  <label for="inputPermittype" class="col-sm-4 control-label">Permit Type</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPermittype" placeholder="Permit Type" name="permittype" value="{{ Input::old('permittype') }}">
                  	@if ($errors->has('permittype')) <p class="help-block">{{ $errors->first('permittype') }}</p> @endif
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            <!-- </form> -->
          </div>
            <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Finance Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- form start -->
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <div class="form-group @if ($errors->has('fin_companyname')) has-error @endif">
                  <label for="inputFinCompanyname" class="col-sm-4 control-label">Company Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputFinComapnyname" placeholder="Finance Company Name" name="fin_companyname" value="{{ Input::old('fin_companyname') }}">
                  	@if ($errors->has('fin_companyname')) <p class="help-block">{{ $errors->first('fin_companyname') }}</p> @endif
                  </div>
                </div>
                <div class="form-group @if ($errors->has('fin_companycode')) has-error @endif">
                  <label for="inputFinCompanycode" class="col-sm-4 control-label">Company Code</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputFinComapnycode" placeholder="Finance Company Code" name="fin_companycode" value="{{ Input::old('fin_companycode') }}">
                  	@if ($errors->has('fin_companycode')) <p class="help-block">{{ $errors->first('fin_companycode') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('fin_accountno')) has-error @endif">
                  <label for="inputFinAccountno" class="col-sm-4 control-label">Account No.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputFinAccountno" placeholder="Finance Account no." name="fin_accountno" value="{{ Input::old('fin_accountno') }}">
                  	@if ($errors->has('fin_accountno')) <p class="help-block">{{ $errors->first('fin_accountno') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('premium_type')) has-error @endif">
                  <label for="inputpremium" class="col-sm-4 control-label">Premium Type</label>
                  <div class="col-sm-8">
                   <!--  <input type="text" class="form-control" id="inputPremiumtype" placeholder="Premium Type" name="premium_type" value="{{ Input::old('premium_type') }}"> -->
                   <select class="form-control" id="inputPremiumtype" name="premium_type" onchange="">
                      <option value="">Select Type</option>
                      <option value="Monthly">Monthly</option>  
                      <option value="Quaterly">Quaterly (3 month)</option> 
                      <option value="Halfyearly">Halfyearly (6 month)</option> 
                      <option value="Yearly">Yearly (1 Yearly)</option> 
                    </select>
                    @if ($errors->has('premium_type')) <p class="help-block">{{ $errors->first('premium_type') }}</p> @endif
                  </div>
                </div>
                <div class="form-group @if ($errors->has('premium_amount')) has-error @endif">
                  <label for="inputPremiumamount" class="col-sm-4 control-label">Premium Amount</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPremiumamount" placeholder="Premium Amount" name="premium_amount" value="{{ Input::old('premium_amount') }}">
                    @if ($errors->has('premium_amount')) <p class="help-block">{{ $errors->first('premium_amount') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('premium_date')) has-error @endif">
                  <label for="inputPremiumdate" class="col-sm-4 control-label">Premium Date</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPremiumdate" placeholder="Premium Date" name="premium_date" value="{{ Input::old('premium_date') }}">
                    @if ($errors->has('premium_date')) <p class="help-block">{{ $errors->first('premium_date') }}</p> @endif
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <!-- </form> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Insurance Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <div class="form-group @if ($errors->has('inscompany_name')) has-error @endif">
                  <label for="inputInscompany" class="col-sm-4 control-label">Company Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputInsCompany" placeholder="Insurance Company Name" name="inscompany_name" value="{{ Input::old('inscompany_name') }}">
                    @if ($errors->has('inscompany_name')) <p class="help-block">{{ $errors->first('inscompany_name') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('inscompany_code')) has-error @endif">
                  <label for="inputInscompanycode" class="col-sm-4 control-label">Company Code</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputInsCompanycode" placeholder="Insurance Company Code" name="inscompany_code" value="{{ Input::old('inscompany_code') }}">
                    @if ($errors->has('inscompany_code')) <p class="help-block">{{ $errors->first('inscompany_code') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('ins_policyno')) has-error @endif">
                  <label for="inputInspolicyno" class="col-sm-4 control-label">Insurance Policy no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputInsPolicyno" placeholder="Insurance Policy no." name="ins_policyno" value="{{ Input::old('ins_policyno') }}">
                    @if ($errors->has('ins_policyno')) <p class="help-block">{{ $errors->first('ins_policyno') }}</p> @endif
                  </div>
                </div>

                <div class="form-group date @if ($errors->has('ins_date')) has-error @endif">
                  <label for="inputInsDate" class="col-sm-4 control-label">Insurance Date</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control datepicker pull-right" id="inputInsDate" placeholder="Insurance Date" name="ins_date" value="{{ Input::old('ins_date') }}">
                    @if ($errors->has('ins_date')) <p class="help-block">{{ $errors->first('ins_date') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('ins_expdate')) has-error @endif">
                  <label for="inputInsExpDate" class="col-sm-4 control-label">Insurance Expire Date</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control datepicker pull-right" id="inputInsExpDate" placeholder="Insurance Expire Date" name="ins_expdate" value="{{ Input::old('ins_expdate') }}">
                    @if ($errors->has('ins_expdate')) <p class="help-block">{{ $errors->first('ins_expdate') }}</p> @endif
                  	
                  </div>
                </div>

                <div class="form-group @if ($errors->has('ins_agentname')) has-error @endif">
                  <label for="inputAgentName" class="col-sm-4 control-label">Agent Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputAgentname" placeholder="Insurance Agent Name" name="ins_agentname" value="{{ Input::old('ins_agentname') }}">
                    @if ($errors->has('ins_agentname')) <p class="help-block">{{ $errors->first('ins_agentname') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('ins_agentphone')) has-error @endif">
                  <label for="inputAgentNo" class="col-sm-4 control-label">Agent Mobile no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputAgentno" placeholder="Insurance Agent Phone no." name="ins_agentphone" value="{{ Input::old('ins_agentphone') }}">
                    @if ($errors->has('ins_agentphone')) <p class="help-block">{{ $errors->first('ins_agentphone') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('ins_amount')) has-error @endif">
                  <label for="inputIntAmount" class="col-sm-4 control-label">Amount</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputAmount" placeholder="Insurance Amount" name="ins_amount" value="{{ Input::old('ins_amount') }}">
                    @if ($errors->has('ins_amount')) <p class="help-block">{{ $errors->first('ins_amount') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('ins_validat')) has-error @endif">
                  <label for="inputValidat" class="col-sm-4 control-label">Validat At</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputValidat" placeholder="Insurance Validity time" name="ins_validat" value="{{ Input::old('ins_validat') }}">
                    @if ($errors->has('ins_validat')) <p class="help-block">{{ $errors->first('ins_validat') }}</p> @endif
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
           <!--  </form> -->
          </div>
          <!-- /.box -->
        	<!-- /.box -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Driver Details</h3>
            </div>
            <div class="box-body">
              <!-- form start -->
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <div class="form-group @if ($errors->has('driverid')) has-error @endif">
                  <label for="inputDrivername" class="col-sm-4 control-label">Driver Name</label>
                  <div class="col-sm-8">
                  	<select class="form-control" id="inputDriverid" name="driverid" onchange="getDriverDetails()">
	                  	<option value="">Driver Name (Driver ka naam)</option>
	                  	@foreach($drivers as $driver)
	                  	<option value="{{ $driver->id }}">{{ $driver->drivername }}</option>
	                  	@endforeach
                  	</select>
                  	@if ($errors->has('driverid')) <p class="help-block">{{ $errors->first('driverid') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('driverphone')) has-error @endif">
                  <label for="inputDriverphone" class="col-sm-4 control-label">Driver Mobile no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly id="inputDrivermobileno" placeholder="Driver Mobile no." name="driverphone">
                    @if ($errors->has('driverphone')) <p class="help-block">{{ $errors->first('driverphone') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('driveraddress')) has-error @endif">
                  <label for="inputDriveraddress" class="col-sm-4 control-label">Driver Address</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly id="inputDriveraddress" placeholder="Driver Address" name="driveraddress">
                    @if ($errors->has('driveraddress')) <p class="help-block">{{ $errors->first('driveraddress') }}</p> @endif
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
        <div class="col-md-12">
        <div class="col-sm-4">
        </div>
	      <div class="col-sm-4">
	        <input type="submit" class="btn btn-primary btn-block" name="submit_vehicle" value="Submit">
	      </div>
	    </div>
      </div>
      <!-- /.row -->
      
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop  