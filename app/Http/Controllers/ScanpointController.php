<?php

namespace App\Http\Controllers;

use App\Scanpoint;
use App\ScanDepartment;
use Illuminate\Http\Request;

class ScanpointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $scanpoints = Scanpoint::all();
        $scandepartments = ScanDepartment::all();
        return view('scanpoints.index')->with(['scandepartments' => $scandepartments, 'scanpoints' => $scanpoints]);
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
     * @param  \App\Scanpoint  $scanpoint
     * @return \Illuminate\Http\Response
     */
    public function show(Scanpoint $scanpoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scanpoint  $scanpoint
     * @return \Illuminate\Http\Response
     */
    public function edit(Scanpoint $scanpoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scanpoint  $scanpoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scanpoint $scanpoint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scanpoint  $scanpoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scanpoint $scanpoint)
    {
        //
    }
}
