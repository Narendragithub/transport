@extends('layouts/main')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoices
        <small>Invoices List</small>
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
              <a href="{{ url('/createinvoice') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Invoice</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr>
                  <th>Invoice Id</th>
                  <th>Order Id</th>
                  <th>Client Name</th>
                  <th>Client Phone</th>
                  <th>Date</th>
                  <th>Total Amount</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($invoices)
                @foreach($invoices as $invoice)
                <tr>
                  <td>{{$invoice->id}}</td>
                  <td>{{$invoice->orderid}}</td>
                  <td>{{$invoice->clientname}}</td>
                  <td>{{$invoice->clientphone}}</td>
                  <td>{{$invoice->invoicedate}}</td>
                  <td>Rs. {{$invoice->totalamount}}</td>
                  <td><a href="{{ url('/editinvoice/'.$invoice->id) }}" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a> <a href="{{ url('/viewinvoice/'.$invoice->id) }}" data-toggle="tooltip" title="" data-original-title="View"><i class="fa fa-eye"></i></a> <a href="{{ url('/invoicedelete/'.$invoice->id) }}" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td>
                </tr>
                @endforeach
                @else
                  <tr>
                    <td colspan="5">No Invoices Available.</td>
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