 @extends('layouts/main')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#007612</small>
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
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> RajputAutoparts, Inc.
            <small class="pull-right">Date: <?php echo date('d-m-Y') ?></small>
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
        <div class="col-sm-6 invoice-col">
          To
         <address>
           {!! csrf_field() !!}
           <input type="hidden" name="orderid" id="orderid" value="{{rand()}}">
           <input type="hidden" name="totalamount" id="totalamount" value="">
           <input type="hidden" name="invoicedate" id="invoicedate" value="{{date('Y-m-d')}}">
             <div class="col-sm-5">
                 <!-- select -->
                <div class="form-group @if ($errors->has('clientid')) has-error @endif">
                  <label>Client Name</label>
                  <select class="form-control" name="clientid" id="clientid" onchange="getClientDetails()" required>
                    <option value="">Select Client</option>
                    @foreach($clients as $client)
                     <option value="{{ $client->id }}">{{$client->clientname}}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('clientid')) <p class="help-block">{{ $errors->first('clientid') }}</p> @endif
                </div>
    
                <!-- text input -->
                <div class="form-group @if ($errors->has('clientphone')) has-error @endif">
                  <label>Client Phone</label>
                  <input class="form-control" placeholder="Client Phone no." type="text" name="clientphone" id="clientphone" required>
                  @if ($errors->has('clientphone')) <p class="help-block">{{ $errors->first('clientphone') }}</p> @endif
                </div>
              </div>
              <div class="col-sm-1">
               <label></label>
                <label>OR</label>
              </div>
              <div class="col-sm-5">
                <!-- text input -->
                <div class="form-group @if ($errors->has('clientname')) has-error @endif">
                   <label>Client Name</label>
                  <input class="form-control" placeholder="Client Name" type="text" name="clientname" id="clientname" >
                  @if ($errors->has('clientname')) <p class="help-block">{{ $errors->first('clientname') }}</p> @endif
                </div>
                  <!-- text input -->
                <div class="form-group @if ($errors->has('clientemail')) has-error @endif">
                  <label>Client Email</label>
                  <input class="form-control" placeholder="Client Email" type="text" name="clientemail" id="clientemail" required>
                  @if ($errors->has('clientemail')) <p class="help-block">{{ $errors->first('clientemail') }}</p> @endif
                </div>
              </div>
             
            </address> 
        </div>
        <!-- /.col -->
        <div class="col-sm-2 invoice-col">
            <label></label>
            <label></label>
           <!-- textarea -->
              <div class="form-group @if ($errors->has('clientaddress')) has-error @endif">
                <label>Client Address</label>
                  <textarea class="form-control" rows="4" placeholder="Client Address" name="clientaddress" id="clientaddress" required > </textarea>
                  @if ($errors->has('clientaddress')) <p class="help-block">{{ $errors->first('clientaddress') }}</p> @endif
              </div>
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
              <th>Vahicle</th>
              <th>Date</th>
              <th>Quantity</th>
              <th>Rate/Trip</th>
              <th>Total</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr class="tr_clone">
              <td>
                 <select class="form-control vahicleid" id="vahicleid0" data="0" name="vahicleid[]">
                      <option value="">Select Vahicle</option>
                      @foreach($vehicles as $vehicle)
                      <option value="{{ $vehicle->id }}">{{ $vehicle->vehiclename.'-('.$vehicle->vehicleno.')' }}</option>
                      @endforeach
                  </select>
              </td>
              <td><input type="text" class="form-control datepicker date" data="0" id="date0" placeholder="Trip Date" name="date[]" value=""></td>
              <td><input type="text" class="form-control quatity" data="0"  id="quantity0" placeholder="Trip Quantity" name="quantity[]" value=""></td>
              <td><input type="text" class="form-control ratepertrip" data="0" id="ratepertrip0" placeholder="Rate Per Trip" name="ratepertrip[]" value=""></td>
              <td><input type="text" class="form-control triptotal" data="0" id="triptotal0" placeholder="Total" name="total[]" value="" readonly="readonly"></td>
              <td><input type="button" class="btn btn-primary addrow" data="0" id="" name="" value="Add Row"></td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
         <p class="lead">Amount Due <?php echo date('d-m-Y') ?></p>
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
                <td><i class="fa fa-fw fa-rupee"></i><span id="subtotal">00.00</span></td>
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
                <td><i class="fa fa-fw fa-rupee"></i><span id="total">00.00</td>
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
          <button type="submit" name="print_invoice" class="btn btn-default pull-right" style="margin-left: 5px;margin-right: 5px;"><i class="fa fa-print"></i> Print</button>
          <button type="submit" name="submit_invoice" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Invoice</button>
          <button type="submit" name="generate_pdf" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  
  @stop  