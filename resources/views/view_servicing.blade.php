@extends('layouts/main')
@section('content')
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Servicing Details
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
              <h3 class="box-title">Servicing Details</h3>
            </div>
            <div class="box-body">
               <?php
                  $vehicle = \App\Vehicle::find($servicing->vehicleno);
                 ?>
               <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th >Vahicle No</th>
                      <td>{{$vehicle->vehiclename.'-'.$vehicle->vehicleno}}</td>
                    </tr>
                    <tr>
                      <th>Autoparts Name</th>
                      <td>{{$servicing->autopart_name}}</td>
                    </tr>
                    <tr>
                      <th >Autoparts Contactno.</th>
                      <td>{{$servicing->autopart_contactno}}</td>
                    </tr>
                    <tr>
                      <th >City</th>
                      <td>{{$servicing->city}}</td>
                    </tr>

                    <tr>
                      <th >Change Oil</th>
                      <td>{{$servicing->oil_change}}</td>
                    </tr>

                    <tr>
                      <th >Oil Amount</th>
                      <td>{{$servicing->oil_amount}}</td>
                    </tr>
                    <tr>
                      <th >Change Parts</th>
                      <td>{{$servicing->change_parts}}</td>
                    </tr>
                    <tr>
                      <th >Change Partsname</th>
                      <td>{{$servicing->change_parts_name}}</td>
                    </tr>
                    <tr>
                      <th >Parts Amount</th>
                      <td>{{$servicing->parts_amount}}</td>
                    </tr>
                    <tr>
                      <th >Bill no.</th>
                      <td>{{$servicing->bill_no}}</td>
                    </tr>
                    <tr>
                      <th >Bill Amount</th>
                      <td>{{$servicing->bill_amount}}</td>
                    </tr>
                    <tr>
                      <th >Paid Amount</th>
                      <td>{{$servicing->paid_amount}}</td>
                    </tr>
                    <tr>
                      <th >Remaining Amount</th>
                      <td>{{$servicing->remaining_amount}}</td>
                    </tr>
                    <tr>
                      <th >Servicing Date</th>
                      <td>{{$servicing->servicing_date}}</td>
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