<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Vehicle;
use App\Driver;
use App\Fuel;
use App\Servicing;
use App\Client;
use App\Invoicetrip;
class HomeController extends Controller
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
        $data=array();
        if (!\Auth::user()) {
            return \Redirect::to('/')->send();
        }
        else
        {
            $data['user'] = \Auth::user();
        }

        
        $data['vehicles'] = Vehicle::count();
        $data['drivers'] = Driver::count();
        $data['fuels'] = Fuel::count();
        $data['clients'] = Client::count();
        $data['trips'] =Invoicetrip::count();
        return view('layouts/main_content',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
