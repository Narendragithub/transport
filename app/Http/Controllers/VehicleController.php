<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
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
        return view('add_vehicle');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
