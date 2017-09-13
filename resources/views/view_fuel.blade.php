@extends('layouts/main')
@section('content')
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Fuel Details
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
              <h3 class="box-title">Fuel Details</h3>
            </div>
            <div class="box-body">
               <?php
                  $vehicle = \App\Vehicle::find($fuel->vehicleno);
                 ?>
               <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th >Vahicle No</th>
                      <td>{{$vehicle->vehicleno}}</td>
                    </tr>
                    <tr>
                      <th>Fuel Quantity</th>
                      <td>{{$fuel->fuelquantity}}</td>
                    </tr>
                    <tr>
                      <th >Bill Amount</th>
                      <td>{{$fuel->fuelamount}}</td>
                    </tr>
                    <tr>
                      <th >Bill date</th>
                      <td>{{$fuel->date}}</td>
                    </tr>

                    <tr>
                      <th >Bill no.</th>
                      <td>{{$fuel->billno}}</td>
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