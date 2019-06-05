<?php
namespace App\Http\Controllers;
use App\ScanDepartment;
use Illuminate\Http\Request;

class ScanDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('scandepartment.index', ['ScanDepartments' => ScanDepartment::all()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scandepartment.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = new ScanDepartment;
        $name->name = request('name');
        $name->save();
        return redirect('/scandepartment');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\ScanDepartment  $scanDepartment
     * @return \Illuminate\Http\Response
     */
    public function show(ScanDepartment $scanDepartment)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ScanDepartment  $scanDepartment
     * @return \Illuminate\Http\Response
     */
    public function edit(ScanDepartment $scanDepartment, $id, Request $request)
    {
        return view('scandepartment.edit', ['ScanDepartments' => $scanDepartment]);   
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ScanDepartment  $scanDepartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScanDepartment $scanDepartment, $id)
    {
        $rules = array(
            'scanDepartment_name' => 'required',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()
                        ->action('ScanDepartmentController@edit', ['id' => $scanDepartment->id])
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $scanDepartment->scanDepartment_name = $request->input('scanDepartment_name');
            $scanDepartment->save();
        }
        return redirect('/scandepartment');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ScanDepartment  $scanDepartment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        ScanDepartment::destroy($id);
        
        return redirect('/scandepartment');
    }   
}