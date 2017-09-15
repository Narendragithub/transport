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
use App\Fuel;
use App\Servicing;

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
        $data['drivers'] = Driver::all();
        $data['sdriver'] = Driver::find($vehicle->driverid);
        return response()->view('edit_vehicle', $data);
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
            return Redirect::to('/vehicle/edit/'.$request->id)->withErrors($validator)->withInput(Input::all());

        }else{
            
                $vahicle= Vehicle::find($request->id);
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
                \Session::flash('message', 'Your Vehicle has been update successfully.');
                return redirect(url('vehicles'));
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
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
        \Session::flash('message', 'Your Vehicle has been deleted successfully.');
        return redirect(url('vehicles'));
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fuel()
    {
        $data['fuels'] = Fuel::all();
        return response()->view('fuel_list', $data);
        
    }

    public function addfuel()
    {
        $data['vehicles'] = Vehicle::all();
        return response()->view('add_fuel',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storefuel(Request $request)
    {
        $rules = array(
            'vehicleno' => 'required',                        
            'fuelquantity'   => 'required|integer',     
            'fuelamount'   => 'required|integer', 
            'date' => 'required',
            'billno' => 'required'
        );

        
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) 
        {
            $messages = $validator->messages();
            return Redirect::to('/vehicle/addfuel')->withErrors($validator)->withInput(Input::all());

        }else{
            
                $fuel= new Fuel;
                $fuel->vehicleno=$request->vehicleno;
                $fuel->fuelquantity=$request->fuelquantity;
                $fuel->fuelamount=$request->fuelamount;
                $fuel->date=$request->date;
                $fuel->billno=$request->billno;
                $fuel->save();
                \Session::flash('message', 'Your fuel has been created successfully.');
                return redirect(url('/vehicle/fuel'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editfuel($id)
    {
        $data['fuel']=Fuel::find($id);
        $data['vehicles'] = Vehicle::all();
        return response()->view('edit_fuel', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatefuel(Request $request)
    {
        $rules = array(
            'vehicleno' => 'required',                        
            'fuelquantity'   => 'required|integer',     
            'fuelamount'   => 'required|integer', 
            'date' => 'required',
            'billno' => 'required'
        );

        
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) 
        {
            $messages = $validator->messages();
            return Redirect::to('/vehicle/editfuel')->withErrors($validator)->withInput(Input::all());

        }else{
            
            $fuel= Fuel::find($request->id);
            $fuel->vehicleno=$request->vehicleno;
            $fuel->fuelquantity=$request->fuelquantity;
            $fuel->fuelamount=$request->fuelamount;
            $fuel->date=$request->date;
            $fuel->billno=$request->billno;
            $fuel->save();
            \Session::flash('message', 'Your fuel has been updated successfully.');
            return redirect(url('/vehicle/fuel'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response\Session::flash('message', 'Your project has been created successfully.');
     */
    public function showfuel($id)
    {
        $data['fuel']=Fuel::find($id);
        return response()->view('view_fuel', $data);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fueldestroy($id)
    {
        $fuel = Fuel::findOrFail($id);
        $fuel->delete();
        \Session::flash('message', 'Your fuel has been deleted successfully.');
        return redirect(url('fuel'));
        
    }

    //Servicing and Repairing

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function servicing()
    {
        $data['servicings'] = Servicing::all();
        return response()->view('servicing_list', $data);
        
    }

    public function addservicing()
    {
        $data['vehicles'] = Vehicle::all();
        return response()->view('add_servicing',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeservicing(Request $request)
    {
        $rules = array(
            'vehicleno' => 'required',                        
            'autopart_name'   => 'required',     
            'autopart_contactno'   => 'required|integer', 
            'city' => 'required',
            'oil_change' => 'required',
            'oil_amount' => 'required',
            'change_parts' => 'required',
            'change_parts_name' => 'required',
            'parts_amount' => 'required',
            'bill_no' => 'required',
            'bill_amount' => 'required',
            'paid_amount' => 'required',
            'remaining_amount' => 'required',
            'servicing_date' => 'required'

        );

        
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) 
        {
            $messages = $validator->messages();
            return Redirect::to('/vehicle/addservicing')->withErrors($validator)->withInput(Input::all());

        }else{
            
                $servicing= new Servicing;
                $servicing->vehicleno=$request->vehicleno;
                $servicing->autopart_name=$request->autopart_name;
                $servicing->autopart_contactno=$request->autopart_contactno;
                $servicing->city=$request->city;
                $servicing->oil_change=$request->oil_change;
                $servicing->oil_amount=$request->oil_amount;
                $servicing->change_parts=$request->change_parts;
                $servicing->change_parts_name=$request->change_parts_name;
                $servicing->parts_amount=$request->parts_amount;
                $servicing->bill_no=$request->bill_no;
                $servicing->bill_amount=$request->bill_amount;
                $servicing->paid_amount=$request->paid_amount;
                $servicing->remaining_amount=$request->remaining_amount;
                $servicing->servicing_date=$request->servicing_date;
                $servicing->save();
                \Session::flash('message', 'Your servicing has been created successfully.');
                return redirect(url('/vehicle/servicing'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editservicing($id)
    {
        $data['servicing']=Servicing::find($id);
        $data['vehicles'] = Vehicle::all();
        return response()->view('edit_servicing', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateservicing(Request $request)
    {
        $rules = array(
            'vehicleno' => 'required',                        
            'autopart_name'   => 'required',     
            'autopart_contactno'   => 'required|integer', 
            'city' => 'required',
            'oil_change' => 'required',
            'oil_amount' => 'required',
            'change_parts' => 'required',
            'change_parts_name' => 'required',
            'parts_amount' => 'required',
            'bill_no' => 'required',
            'bill_amount' => 'required',
            'paid_amount' => 'required',
            'remaining_amount' => 'required',
            'servicing_date' => 'required'
        );

        
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) 
        {
            $messages = $validator->messages();
            return Redirect::to('/vehicle/editservicing')->withErrors($validator)->withInput(Input::all());

        }else{
            
            $servicing= Servicing::find($request->id);
            $servicing->vehicleno=$request->vehicleno;
            $servicing->autopart_name=$request->autopart_name;
            $servicing->autopart_contactno=$request->autopart_contactno;
            $servicing->city=$request->city;
            $servicing->oil_change=$request->oil_change;
            $servicing->oil_amount=$request->oil_amount;
            $servicing->change_parts=$request->change_parts;
            $servicing->change_parts_name=$request->change_parts_name;
            $servicing->parts_amount=$request->parts_amount;
            $servicing->bill_no=$request->bill_no;
            $servicing->bill_amount=$request->bill_amount;
            $servicing->paid_amount=$request->paid_amount;
            $servicing->remaining_amount=$request->remaining_amount;
            $servicing->servicing_date=$request->servicing_date;
            $servicing->save();
            \Session::flash('message', 'Your servicing has been updated successfully.');
            return redirect(url('/vehicle/servicing'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response\Session::flash('message', 'Your project has been created successfully.');
     */
    public function showservicing($id)
    {
        $data['servicing']=Servicing::find($id);
        return response()->view('view_servicing', $data);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function servicingdestroy($id)
    {
        $servicing = Servicing::findOrFail($id);
        $servicing->delete();
        \Session::flash('message', 'Your servicing has been deleted successfully.');
        return redirect(url('servicing'));
        
    }

    public function getVehicles()
    {

         $data['vehicles'] = Vehicle::all();
        return response()->json($data);
    }


}
