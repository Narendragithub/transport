@extends('layouts/main')
@section('content')
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Client Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <form class="form-horizontal" method="post" action="/client/update"> 
    {!! csrf_field() !!}
    <input type="hidden" name="id" value="{{$client->id}}">
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
              <!-- form start -->
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <div class="form-group @if ($errors->has('clientname')) has-error @endif">
                  <label for="inputclientname" class="col-sm-4 control-label">Client Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputclientname" placeholder="Client Name" name="clientname" value="{{$client->clientname}}">
                    @if ($errors->has('clientname')) <p class="help-block">{{ $errors->first('clientname') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('clientphone')) has-error @endif">
                  <label for="inputclientphone" class="col-sm-4 control-label">Client Mobile no.</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputclientmobileno" placeholder="client Mobile no." name="clientphone" value="{{$client->clientphone}}">
                    @if ($errors->has('clientphone')) <p class="help-block">{{ $errors->first('clientphone') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('clientemail')) has-error @endif">
                  <label for="inputclientemail" class="col-sm-4 control-label">Client Email</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputclientemail" placeholder="Client Email" name="clientemail" value="{{$client->email}}">
                    @if ($errors->has('clientemail')) <p class="help-block">{{ $errors->first('clientemail') }}</p> @endif
                  </div>
                </div>

                <div class="form-group @if ($errors->has('clientaddress')) has-error @endif">
                  <label for="inputclientaddress" class="col-sm-4 control-label">Client Address</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" id="inputclientaddress" placeholder="Client Address" name="clientaddress">
                      {{$client->address}}
                    </textarea> 
                    @if ($errors->has('clientaddress')) <p class="help-block">{{ $errors->first('clientaddress') }}</p> @endif
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputclientaddress" class="col-sm-4 control-label"></label>
                   <div class="col-sm-8">
                  <input type="submit" class="btn btn-primary btn-block" name="submit_client" value="Submit">
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