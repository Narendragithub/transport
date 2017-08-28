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
              	 <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th >Vehicle Name</th>
                      <td>{{$vehicle->vehiclename}}</td>
                    </tr>
                    <tr>
                      <th >Vehicle No.</th>
                      <td>{{$vehicle->vehicleno}}</td>
                    </tr>
                    <tr>
                      <th >Company Name</th>
                      <td>{{$vehicle->companyno}}</td>
                    </tr>
                    <tr>
                      <th >Company Code</th>
                      <td>{{$vehicle->companycode}}</td>
                    </tr>
                    <tr>
                      <th >Model no.</th>
                      <td>{{$vehicle->modelno}}</td>
                    </tr>
                    <tr>
                      <th >Engine no.</th>
                      <td>{{$vehicle->engineno}}</td>
                    </tr>
                    <tr>
                      <th >Chasis no.</th>
                      <td>{{$vehicle->chasisno}}</td>
                    </tr>
                    <tr>
                      <th >Permit Type</th>
                      <td>{{$vehicle->permittype}}</td>
                    </tr>
                  </tbody>
              </table>
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
              <div class="box-body">
                   <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th >Company Name</th>
                      <td>{{$vehicle->fin_companyname}}</td>
                    </tr>
                    <tr>
                      <th >Company Code</th>
                      <td>{{$vehicle->fin_companycode}}</td>
                    </tr>
                    <tr>
                      <th >Account No.</th>
                      <td>{{$vehicle->fin_accountno}}</td>
                    </tr>
                    <tr>
                      <th >Premium Type</th>
                      <td>{{$vehicle->fin_premiumtype}}</td>
                    </tr>
                    <tr>
                      <th >Premium Amount</th>
                      <td>{{$vehicle->fin_premiumamount}}</td>
                    </tr>
                    <tr>
                      <th >Premium Date</th>
                      <td>{{$vehicle->fin_premiumdate}}</td>
                    </tr>
                  </tbody>
              </table>

              </div>
              <!-- /.box-body -->
              
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
              <div class="box-body">
                   <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th >Company Name</th>
                      <td>{{$vehicle->ins_companyname}}</td>
                    </tr>
                    <tr>
                      <th >Company Code</th>
                      <td>{{$vehicle->ins_companycode}}</td>
                    </tr>
                    <tr>
                      <th >Insurance Policy no.</th>
                      <td>{{$vehicle->ins_policyno}}</td>
                    </tr>
                    <tr>
                      <th >Insurance Date</th>
                      <td>{{$vehicle->ins_date}}</td>
                    </tr>
                    <tr>
                      <th >Insurance Expire Date</th>
                      <td>{{$vehicle->ins_expirdate}}</td>
                    </tr>
                    <tr>
                      <th >Agent Name</th>
                      <td>{{$vehicle->ins_agentname}}</td>
                    </tr>
                    <tr>
                      <th >Agent Mobile no.</th>
                      <td>{{$vehicle->ins_agentphone}}</td>
                    </tr>
                    <tr>
                      <th >Amount</th>
                      <td>{{$vehicle->ins_amount}}</td>
                    </tr>
                    <tr>
                      <th >Validat At</th>
                      <td>{{$vehicle->ins_validatat}}</td>
                    </tr>
                  </tbody>
              </table>

              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
        	<!-- /.box -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Driver Details</h3>
            </div>
            <div class="box-body">
              <!-- form start -->
              <div class="box-body">
                   <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th >Driver Name</th>
                      <td>{{$driver->drivername}}</td>
                    </tr>
                    <tr>
                      <th >Driver Mobile no.</th>
                      <td>{{$driver->phone}}</td>
                    </tr>
                    <tr>
                      <th >Driver Address</th>
                      <td>{{$driver->address}}</td>
                    </tr>
                  </tbody>
              </table>
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
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop  