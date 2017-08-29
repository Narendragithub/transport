<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['drivers'] = Driver::all();
      return response()->view('driver_list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_driver');
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
            'drivername' => 'required',                        
            'driverphone'   => 'required',     
            'driversalary'   => 'required',
            'driveraddress'   => 'required',
          
        );

        
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) 
        {
            $messages = $validator->messages();
            return Redirect::to('adddriver')->withErrors($validator)->withInput(Input::all());

        }
        else
        {
            $driver= new Driver;
            $driver->drivername=$request->drivername;
            $driver->phone=$request->driverphone;
            $driver->address=$request->driveraddress;
            $driver->salary=$request->driversalary;
            $driver->save();
            \Session::flash('message', 'Your Driver has been created successfully.');
            return redirect(url('drivers'));
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
        $data['driver'] = Driver::find($id);
        return response()->view('view_driver', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['driver'] = Driver::find($id);
        return response()->view('edit_driver', $data);
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
            'drivername' => 'required',                        
            'driverphone'   => 'required',     
            'driversalary'   => 'required',
            'driveraddress'   => 'required',
          
        );

        
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) 
        {
            $messages = $validator->messages();
            return Redirect::to('/driver/edit/'.$request->id)->withErrors($validator)->withInput(Input::all());

        }
        else
        {
            $driver= Driver::find($request->id);
            $driver->drivername=$request->drivername;
            $driver->phone=$request->driverphone;
            $driver->address=$request->driveraddress;
            $driver->salary=$request->driversalary;
            $driver->save();
            \Session::flash('message', 'Your Driver has been updated successfully.');
            return redirect(url('drivers'));
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
        $driver = Driver::findOrFail($id);
        $driver->delete();
        \Session::flash('message', 'Your Driver has been deleted successfully.');
        return redirect(url('drivers'));
    }

    public function getDriver(Request $request)
    {

        $data['driver'] = Driver::find($request->id);
        return response()->json($data);
    }
}
