<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Client;
use App\Vehicle;
use App\Invoice;
use App\Invoicetrip;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    var $data = null;
    public function __construct() {

        if (!\Auth::user()) {
            return \Redirect::to('/')->send();
        }
        else
        {
            $data['user'] = \Auth::user();
        }
    }

    public function index()
    {

        if (!\Auth::user()) {
            return \Redirect::to('/')->send();
        }
        else
        {
            $data['user'] = \Auth::user();
        }
      $data['clients'] = Client::all();
      return response()->view('client_list', $data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!\Auth::user()) {
            return \Redirect::to('/')->send();
        }
        else
        {
            $data['user'] = \Auth::user();
        }
        return view('add_client',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = array(
            'clientname' => 'required',                        
            'clientphone'   => 'required',     
            'clientemail'   => 'required|email',
            'clientaddress'   => 'required',
          
        );

        
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) 
        {
            $messages = $validator->messages();
            return Redirect::to('addclient')->withErrors($validator)->withInput(Input::all());

        }
        else
        {
            $client= new Client;
            $client->clientname=$request->clientname;
            $client->clientphone=$request->clientphone;
            $client->email=$request->clientemail;
            $client->address=$request->clientaddress;
            $client->save();
            \Session::flash('message', 'Your client has been created successfully.');
            return redirect(url('clients'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!\Auth::user()) {
            return \Redirect::to('/')->send();
        }
        else
        {
            $data['user'] = \Auth::user();
        }
        $data['client'] = Client::find($id);
        return response()->view('view_client', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!\Auth::user()) {
            return \Redirect::to('/')->send();
        }
        else
        {
            $data['user'] = \Auth::user();
        }
        $data['client'] = Client::find($id);
        return response()->view('edit_client', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = array(
            'clientname' => 'required',                        
            'clientphone'   => 'required|integer',     
            'clientemail'   => 'required|email',
            'clientaddress'   => 'required',
          
        );

        
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) 
        {
            $messages = $validator->messages();
            return Redirect::to('/client/edit/'.$request->id)->withErrors($validator)->withInput(Input::all());

        }
        else
        {
            $client= Client::find($request->id);
            $client->clientname=$request->clientname;
            $client->clientphone=$request->clientphone;
            $client->email=$request->clientemail;
            $client->address=$request->clientaddress;
            $client->save();
            \Session::flash('message', 'Your client has been updated successfully.');
            return redirect(url('clients'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        \Session::flash('message', 'Your Client has been deleted successfully.');
        return redirect(url('clients'));
    }

    public function invoices()
    {

        if (!\Auth::user()) {
            return \Redirect::to('/')->send();
        }
        else
        {
            $data['user'] = \Auth::user();
        }
      $data['invoices'] = Invoice::all();
      return response()->view('invoices', $data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createinvoice()
    {
        if (!\Auth::user()) {
            return \Redirect::to('/')->send();
        }
        else
        {
            $data['user'] = \Auth::user();
        }

        $data['vehicles'] = Vehicle::all();
        $data['clients'] = Client::all();
        return response()->view('add_invoice', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeinvoice(Request $request)
    {
        //echo "<pre>";
       // print_r($_POST);
       // die();
        $rules = array(
            'clientid'=>'required|integer',  
            'clientname' => 'required',                    
            'clientphone'   => 'required',     
            'clientemail'   => 'required|email',
            'clientaddress'   => 'required',
          
        );

        
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) 
        {
            $messages = $validator->messages();
            return Redirect::to('/createinvoice')->withErrors($validator)->withInput(Input::all());

        }
        else
        {
            $invoice= new Invoice;
            $invoice->orderid=$request->orderid;
            $invoice->clientid=$request->clientid;
            $invoice->clientname=$request->clientname;
            $invoice->clientphone=$request->clientphone;
            $invoice->clientemail=$request->clientemail;
            $invoice->clientaddress=trim($request->clientaddress);
            $invoice->totalamount=$request->totalamount;
            $invoice->invoicedate=$request->invoicedate;
            $invoice->save();

            //Invoice trips
           
            for($i=0;$i<count($request->vahicleid);$i++)
            {
                $invoicetrip = new Invoicetrip;
               $invoicetrip->invoiceid=$invoice->id;
               $invoicetrip->vehicleid=$request->vahicleid[$i];
               $invoicetrip->trip_amount=$request->ratepertrip[$i];
               $invoicetrip->total_trip=$request->quantity[$i];
               $invoicetrip->total_trip_amount=$request->total[$i];
               $invoicetrip->trip_date=$request->date[$i]; 
               $invoicetrip->save();
            }

            \Session::flash('message', 'Your Invoice has been created successfully.');
            return redirect(url('invoices'));
        }
    }

    public function getClient(Request $request)
    {

        $data['client'] = Client::find($request->id);
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showinvoice($id)
    {
        if (!\Auth::user()) {
            return \Redirect::to('/')->send();
        }
        else
        {
            $data['user'] = \Auth::user();
        }
        $data['invoice'] = Invoice::with('invoicetrips')->find($id);
        return response()->view('view_invoice', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editinvoice($id)
    {
        if (!\Auth::user()) {
            return \Redirect::to('/')->send();
        }
        else
        {
            $data['user'] = \Auth::user();
        }
        $data['vehicles'] = Vehicle::all();
        $data['clients'] = Client::all();
        $data['invoice'] = Invoice::with('invoicetrips')->find($id);
        return response()->view('edit_invoice', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateinvoice(Request $request)
    {
        //echo "<pre>";
       // print_r($_POST);
       // die();
        $rules = array(
            'clientid'=>'required|integer',  
            'clientname' => 'required',                    
            'clientphone'   => 'required',     
            'clientemail'   => 'required|email',
            'clientaddress'   => 'required',
          
        );

        
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) 
        {
            $messages = $validator->messages();
            return Redirect::to('/editinvoice/'.$request->invoiceid)->withErrors($validator)->withInput(Input::all());

        }
        else
        {
            $invoice= Invoice::find($request->invoiceid);
            $invoice->orderid=$request->orderid;
            $invoice->clientid=$request->clientid;
            $invoice->clientname=$request->clientname;
            $invoice->clientphone=$request->clientphone;
            $invoice->clientemail=$request->clientemail;
            $invoice->clientaddress=trim($request->clientaddress);
            $invoice->totalamount=$request->totalamount;
            $invoice->invoicedate=$request->invoicedate;
            $invoice->save();

            //Invoice trips
            $trips = Invoicetrip::where('invoiceid',$request->invoiceid)->delete();
            for($i=0;$i<count($request->vahicleid);$i++)
            {
               $invoicetrip = new Invoicetrip;
               $invoicetrip->invoiceid=$request->invoiceid;
               $invoicetrip->vehicleid=$request->vahicleid[$i];
               $invoicetrip->trip_amount=$request->ratepertrip[$i];
               $invoicetrip->total_trip=$request->quantity[$i];
               $invoicetrip->total_trip_amount=$request->total[$i];
               $invoicetrip->trip_date=$request->date[$i]; 
               $invoicetrip->save();
            }

            \Session::flash('message', 'Your Invoice has been updated successfully.');
            return redirect(url('invoices'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function invoicedelete($id)
    {
        $Invoice = Invoice::findOrFail($id);
        $Invoice->delete();
        $trips = Invoicetrip::where('invoiceid',$id)->delete();
        \Session::flash('message', 'Your Invoice has been deleted successfully.');
        return redirect(url('invoices'));
    }

}
