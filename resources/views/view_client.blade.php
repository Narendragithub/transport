@extends('layouts/main')
@section('content')
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Client Details
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
              <h3 class="box-title">Client Details</h3>
            </div>
            <div class="box-body">
               <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th >client Name</th>
                      <td>{{$client->clientname}}</td>
                    </tr>
                    <tr>
                      <th >client PhoneNo.</th>
                      <td>{{$client->clientphone}}</td>
                    </tr>
                    <tr>
                      <th >email</th>
                      <td>{{$client->email}}</td>
                    </tr>
                    <tr>
                      <th >Address</th>
                      <td>{{$client->address}}</td>
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