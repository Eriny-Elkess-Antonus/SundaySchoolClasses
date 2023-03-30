<?php

namespace App\Http\Controllers;

use App\Models\SchoolClasses;
use App\Models\schoolStudents;
use Illuminate\Http\Request;

class SchoolClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $classes= SchoolClasses::all();
        return view('all_classes',compact('classes'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_class');
    }


    public function store(Request $request)
    {
        
        $this->validate($request,[
            'className'=>'required',
            'numberOfStudents'=>'required'
        ]);
        $class=SchoolClasses::create($request->all());
        return redirect()->route('SundaySchool.index') ->with('success','class added successflly');
    }

    public function show( SchoolClasses $schoolClass)
    {
       // $schoolClass = SchoolClasses::find($id); 
        return view('show_class_details',compact('schoolClass'));
    }

    public function addStudent(Request $request )
    {
        $class =SchoolClasses::find($id); 
        $request->validate($request,[
            'name'=>'required',
            'adge'=>'required',
            'gender'=>'required',
        ]);
        $student =SundaySchoolStudents::create([
            'class_ID'=>SchoolClasses::id(),
             'name'=> $request->name,
             'adge'=> $request->adge,
             'gender'=>$request->gender,
    
    ]);
        return redirect()->back();
    }

    public function getStudentsbyClassId()
    {
        $id=SchoolClasses::id();
        $students=schoolStudents::where('class_ID', "=" ,$id)->get;
        return view('show_class_details',compact('students'));
    }
}
