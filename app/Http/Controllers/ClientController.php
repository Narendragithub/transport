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

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        return view('add_client');
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
            'clientemail'   => 'required',
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
            'clientphone'   => 'required',     
            'clientemail'   => 'required',
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
}
