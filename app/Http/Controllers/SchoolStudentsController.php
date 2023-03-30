<?php

namespace App\Http\Controllers;

use App\Models\schoolStudents;
use App\Models\SchoolClasses;
use Illuminate\Http\Request;

class SchoolStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=SchoolClasses::id();
        $students=schoolStudents::where('class_ID', "=" ,$id)->get;
        return view('show_class_details',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes=SchoolClasses::orderBy('id')->get();
        return view('create_student',compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class =SchoolClasses::find($id); 
        $request->validate($request,[
            'name'=>'required',
            'adge'=>'required',
            'gender'=>'required',
        ]);
        $student =schoolStudents::create([
            'class_ID'=>SchoolClasses::id(),
             'name'=> $request->name,
             'adge'=> $request->adge,
             'gender'=>$request->gender,
    
    ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\schoolStudents  $schoolStudents
     * @return \Illuminate\Http\Response
     */
    public function show(schoolStudents $schoolStudents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\schoolStudents  $schoolStudents
     * @return \Illuminate\Http\Response
     */
    public function edit(schoolStudents $schoolStudents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\schoolStudents  $schoolStudents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, schoolStudents $schoolStudents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\schoolStudents  $schoolStudents
     * @return \Illuminate\Http\Response
     */
    public function destroy(schoolStudents $schoolStudents)
    {
        //
    }
}
