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
              	<div class="form-group">
                  <label for="inputVehiclename" class="col-sm-4 control-label">Vehicle Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputVehiclename" placeholder="Vehicle Name (Gaadi ka naam)" name="vehiclename">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputVehicleno" class="col-sm-4 control-label">Vehicle No.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputVehicleno" placeholder="Vehicle Number (Gaadi no.)" name="vehicleno">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputCompanyname" class="col-sm-4 control-label">Company Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputCompanyName" placeholder="Company Name" name="vcompanyname">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputCompanycode" class="col-sm-4 control-label">Company Code</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputCompanyCode" placeholder="Company Code" name="vcompanycode">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputModelno" class="col-sm-4 control-label">Model no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputModelno" placeholder="Model Number" name="modelno">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEngineno" class="col-sm-4 control-label">Engine no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEngineno" placeholder="Engine Number" name="engineno">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputChasisno" class="col-sm-4 control-label">Chasis no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputChasisno" placeholder="Chasis Number" name="chasisno">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPermittype" class="col-sm-4 control-label">Permit Type</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPermittype" placeholder="Permit Type" name="permittype">
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
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputFinCompanyname" class="col-sm-4 control-label">Company Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputFinComapnyname" placeholder="Finance Company Name" name="fin_companyname">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputFinCompanycode" class="col-sm-4 control-label">Company Code</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputFinComapnycode" placeholder="Finance Company Code" name="fin_companycode">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputFinAccountno" class="col-sm-4 control-label">Account No.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputFinAccountno" placeholder="Finance Account no." name="fin_accountno">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputpremium" class="col-sm-4 control-label">Premium Type</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPremiumtype" placeholder="Premium Type" name="premium_type">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPremiumamount" class="col-sm-4 control-label">Premium Amount</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPremiumamount" placeholder="Premium Amount" name="premium_amount">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPremiumdate" class="col-sm-4 control-label">Premium Date</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPremiumdate" placeholder="Premium Date" name="premium_date">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              </form>
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
                <div class="form-group">
                  <label for="inputInscompany" class="col-sm-4 control-label">Company Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputInsCompany" placeholder="Insurance Company Name" name="inscompany_name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputInscompanycode" class="col-sm-4 control-label">Company Code</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputInsCompanycode" placeholder="Insurance Company Code" name="inscompany_code">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputInspolicyno" class="col-sm-4 control-label">Insurance Policy no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputInsPolicyno" placeholder="Insurance Policy no." name="ins_policyno">
                  </div>
                </div>

                <div class="form-group date">
                  <label for="inputInsDate" class="col-sm-4 control-label">Insurance Date</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control datepicker pull-right" id="inputInsDate" placeholder="Insurance Date" name="ins_date">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputInsExpDate" class="col-sm-4 control-label">Insurance Expire Date</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control datepicker pull-right" id="inputInsExpDate" placeholder="Insurance Expire Date" name="ins_expdate">
                  	
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputAgentName" class="col-sm-4 control-label">Agent Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputAgentname" placeholder="Insurance Agent Name" name="ins_agentname">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputAgentNo" class="col-sm-4 control-label">Agent Mobile no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputAgentno" placeholder="Insurance Agent Phone no." name="ins_agentphone">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputIntAmount" class="col-sm-4 control-label">Amount</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputAmount" placeholder="Insurance Amount" name="ins_amount">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputValidat" class="col-sm-4 control-label">Validat At</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputValidat" placeholder="Insurance Validity time" name="ins_validat">
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
                <div class="form-group">
                  <label for="inputDrivername" class="col-sm-4 control-label">Driver Name</label>
                  <div class="col-sm-8">
                  	<select class="form-control" id="inputDriverid" name="driverid" onchange="getDriverDetails()">
	                  	<option value="">Driver Name (Driver ka naam)</option>
	                  	@foreach($drivers as $driver)
	                  	<option value="{{ $driver->id }}">{{ $driver->drivername }}</option>
	                  	@endforeach
                  	</select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputDriverphone" class="col-sm-4 control-label">Driver Mobile no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly id="inputDrivermobileno" placeholder="Driver Mobile no." name="driverphone">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputDriveraddress" class="col-sm-4 control-label">Driver Address</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly id="inputDriveraddress" placeholder="Driver Address" name="driveraddress">
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