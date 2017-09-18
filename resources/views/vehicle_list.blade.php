@extends('layouts/main')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
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
              <a href="{{ url('/addvehicle') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Vehicle</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Vehicle Name</th>
                  <th>Vehicle No.</th>
                  <th>Company No.</th>
                  <th>Engine No.</th>
                  <th>Chasis No.</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($vehicles)
                @foreach($vehicles as $vehicle)
                <tr>
                  <td>{{$vehicle->vehiclename}}</td>
                  <td>{{$vehicle->vehicleno}}</td>
                  <td>{{$vehicle->companyno}}</td>
                  <td>{{$vehicle->engineno}}</td>
                  <td>{{$vehicle->chasisno}}</td>
                  <td><a href="{{ url('/vehicle/edit/'.$vehicle->id) }}" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a> <a href="{{ url('/vehicle/view/'.$vehicle->id) }}" data-toggle="tooltip" title="" data-original-title="View"><i class="fa fa-eye"></i></a> <a href="{{ url('/vehicle/delete/'.$vehicle->id) }}" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td>
                </tr>
                @endforeach
                @else
                  <tr>
                    <td colspan="5">No Vehicles Available.</td>
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