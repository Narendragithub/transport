@extends('layouts/main')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Servicing Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Well Done!</h4>
                {{ Session::get('message') }}
            </div>
            @endif
          <div class="box">
            <div class="box-header">
              <a href="{{ url('/vehicle/addservicing') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Servicing</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Vehicle Name/No.</th>
                  <th>Autoparts Name</th>
                  <th>Autoparts Contactno.</th>
                  <th>Bill Amount</th>
                  <th>Paid Amount</th>
                  <th>Remaining Amount</th>
                  <th>Servicing Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($servicings)
                @foreach($servicings as $servicing)
                <?php
                  $vehicle = \App\Vehicle::find($servicing->vehicleno);
                 ?>
                <tr>
                  <td>{{$vehicle->vehiclename}}-({{$vehicle->vehicleno}})</td>
                  <td>{{$servicing->autopart_name}}</td>
                  <td>{{$servicing->autopart_contactno}}</td>
                  <td>{{$servicing->bill_amount}}</td>
                  <td>{{$servicing->paid_amount}}</td>
                  <td>{{$servicing->remaining_amount}}</td>
                  <td>{{$servicing->servicing_date}}</td>
                  <td><a href="{{ url('/vehicle/editservicing/'.$servicing->id) }}" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a> <a href="{{ url('/vehicle/servicingview/'.$servicing->id) }}" data-toggle="tooltip" title="" data-original-title="View"><i class="fa fa-eye"></i></a> <a href="{{ url('/vehicle/servicingdelete/'.$servicing->id) }}" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td>
                </tr>
                @endforeach
                @else
                  <tr>
                    <td colspan="5">No servicings Available.</td>
                  </tr>
                @endif
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @stop