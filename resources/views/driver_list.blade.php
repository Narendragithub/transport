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
              <a href="{{ url('/adddriver') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Driver</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Driver Name</th>
                  <th>Driver phone</th>
                  <th>Salary</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($drivers)
                @foreach($drivers as $driver)
                <tr>
                  <td>{{$driver->drivername}}</td>
                  <td>{{$driver->phone}}</td>
                  <td>{{$driver->address}}</td>
                  <td>{{$driver->salary}}</td>
                  <td><a href="{{ url('/driver/edit/'.$driver->id) }}" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a> <a href="{{ url('/driver/view/'.$driver->id) }}" data-toggle="tooltip" title="" data-original-title="View"><i class="fa fa-eye"></i></a> <a href="{{ url('/driver/delete/'.$driver->id) }}" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td>
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