 @extends('layouts/main')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#{{$invoice->orderid}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>

    <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
      </div>
    </div>
     <form class="form-horizontal" method="post" action="/createinvoice"> 
    {!! csrf_field() !!}
    <!-- Main content -->
    <section class="invoice" id="dvContents">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> RajputAutoparts, Inc.
            <small class="pull-right">Date: {{$invoice->invoicedate}}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>RajputAutoparts, Inc.</strong><br>
            AB Road Pachore, Pachore 465683<br>
            Dest. Rajgarh, (MP)<br>
            Phone: (07371) 123-5432<br>
            Email: info@rajputtransport.com
          </address>
        </div>
         <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong>{{$invoice->clientname}}</strong><br>
            {{$invoice->clientaddress}}<br>
            Phone: {{$invoice->clientphone}}<br>
            Email: {{$invoice->clientemail}}
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #{{$invoice->orderid}}</b><br>
          <br>
          <b>Order ID:</b> {{$invoice->orderid}}<br>
          <b>Payment Due:</b> {{$invoice->invoicedate}}<br>
          <b>Account:</b> 968-34567
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
     
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
        <input type="hidden" id="row_counter" value="1">
          <table class="table table-striped" id="invoice_table">
            <thead>
            <tr>
              <th>#</th>
              <th>Vahicle</th>
              <th>Date</th>
              <th>Quantity</th>
              <th>Rate/Trip</th>
              <th>Total</th>
            </tr>
            </thead>
            <tbody>
            @foreach($invoice->invoicetrips as $invoicetrip)
            <tr class="tr_clone">
              <td>{{$invoicetrip->id}}</td>
              <td>{{$invoicetrip->vehicleid}}</td>
              <td>{{$invoicetrip->trip_date}}</td>
              <td>{{$invoicetrip->total_trip}}</td>
              <td>{{$invoicetrip->trip_amount}}</td>
              <td>{{$invoicetrip->total_trip_amount}}</td>
            </tr>
             @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
         <p class="lead">Amount Due {{$invoice->invoicedate}}</p>
         <!--  <p class="lead">Payment Methods:</p>
          <img src="{{asset('dist/img/credit/visa.png')}}" alt="Visa">
          <img src="{{asset('dist/img/credit/mastercard.png')}}" alt="Mastercard">
          <img src="{{asset('dist/img/credit/american-express.png')}}" alt="American Express">
          <img src="{{asset('dist/img/credit/paypal2.png')}}" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p> -->
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%" >Subtotal:</th>
                <td><i class="fa fa-fw fa-rupee"></i><span id="subtotal">{{$invoice->totalamount}}</span></td>
              </tr>
              <!-- <tr>
                <th>Tax (9.3%)</th>
                <td><i class="fa fa-fw fa-rupee"></i><span id="tax">00.00</span></td>
              </tr>
              <tr>
                <th>Shipping:</th>
                <td><i class="fa fa-fw fa-rupee"></i><span id="shipping">00.00</td>
              </tr> -->
              <tr>
                <th>Total:</th>
                <td><i class="fa fa-fw fa-rupee"></i><span id="total">{{$invoice->totalamount}}</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <button type="button" id="btnPrint" class="btn btn-success pull-right"><i class="fa fa-print"></i> Print</button>
          <!-- <button type="submit" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button> -->
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  
  @stop  