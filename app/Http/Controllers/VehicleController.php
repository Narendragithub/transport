<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Vehicle;
use App\Driver;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['vehicles'] = Vehicle::all();
        return response()->view('vehicle_list', $data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['drivers'] = Driver::all();
        return response()->view('add_vehicle', $data);
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
            'vehiclename' => 'required',                        
            'vehicleno'   => 'required',     
            'vcompanyname'   => 'required',
           /* 'vcompanycode' => 'required',
            'modelno' => 'required', 
            'engineno' => 'required', 
            'chasisno' => 'required', 
            'permittype' => 'required', 
            'inscompany_name' => 'required', 
            'inscompany_code' => 'required', 
            'ins_policyno' => 'required', 
            'ins_date' => 'required',
            'ins_expdate' => 'required', 
            'ins_agentname' => 'required', 
            'ins_agentphone' => 'required', 
            'ins_amount' => 'required',
            'ins_validat' => 'required', 
            'fin_companyname' => 'required', 
            'fin_companycode' => 'required', 
            'fin_accountno' => 'required', 
            'premium_type' => 'required', 
            'premium_amount' => 'required', 
            'premium_date' => 'required', 
            'driverid' => 'required'*/
        );

        
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) 
        {
            $messages = $validator->messages();
            return Redirect::to('addvehicle')->withErrors($validator)->withInput(Input::all());

        }else{
            
                $vahicle= new Vehicle;
                $vahicle->vehiclename=$request->vehiclename;
                $vahicle->vehicleno=$request->vehicleno;
                $vahicle->companyno=$request->vcompanyname;
                $vahicle->companycode=$request->vcompanycode;
                $vahicle->modelno=$request->modelno;
                $vahicle->engineno=$request->engineno;
                $vahicle->chasisno=$request->chasisno;
                $vahicle->permittype=$request->permittype;
                $vahicle->ins_companyname=$request->inscompany_name;
                $vahicle->ins_companycode=$request->inscompany_code;
                $vahicle->ins_policyno=$request->ins_policyno;
                $vahicle->ins_date=$request->ins_date;
                $vahicle->ins_expirdate=$request->ins_expdate;
                $vahicle->ins_agentname=$request->ins_agentname;
                $vahicle->ins_agentphone=$request->ins_agentphone;
                $vahicle->ins_amount=$request->ins_amount;
                $vahicle->ins_validatat=$request->ins_validat;
                $vahicle->fin_companyname=$request->fin_companyname;
                $vahicle->fin_companycode=$request->fin_companycode;
                $vahicle->fin_accountno=$request->fin_accountno;
                $vahicle->fin_premiumtype=$request->premium_type;
                $vahicle->fin_premiumamount =$request->premium_amount;
                $vahicle->fin_premiumdate=$request->premium_date;
                $vahicle->driverid=$request->driverid;
                $vahicle->vehicle_status=1;
                $vahicle->save();
                \Session::flash('message', 'Your Vehicle has been created successfully.');
                return redirect(url('vehicles'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response\Session::flash('message', 'Your project has been created successfully.');
     */
    public function show($id)
    {
        $vehicle=Vehicle::find($id);
        $data['vehicle'] = $vehicle;
        $data['driver'] = Driver::find($vehicle->driverid);
        return response()->view('view_vehicle', $data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle=Vehicle::find($id);
        $data['vehicle'] = $vehicle;
        $data['driver'] = Driver::find($vehicle->driverid);
        return response()->view('edit_vehicle', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
