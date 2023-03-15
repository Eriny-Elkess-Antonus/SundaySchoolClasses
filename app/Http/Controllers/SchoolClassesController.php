<?php

namespace App\Http\Controllers;

use App\Models\SchoolClasses;
use App\Models\SundaySchoolStudents;
use Illuminate\Http\Request;

class SchoolClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getallclasses()
    {
      
      
      $classes= SchoolClasses::all();
        return view('all_classes')->with([
            'sundayschoolclasses' =>$classes
           
        ]);
       // ->with('sundayschoolclasses',$classes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createClass()
    {
        return view('create_class');
    }


    public function storeClass(Request $request)
    {
        //'class_name', 'number_ofstudents',
        $this->validate($request,[
            'class_name'=>'required',
            'number_ofstudents'=>'required'
        ]);
        $class=choolClasses::create([
            'class_name'=>$request->class_Name,
            'number_ofstudents'=>$request->number_ofStudents, 
        ]);
        return redirect()->back();
    }

    public function showClass()
    {

    }

    public function addStudent(Request $request )
    {
        $class =SchoolClasses::find($id); 
        $request->validate($request,[
            'name'=>'required',
            'adge'=>'required',
            'gender'=>'required',
            'class_name'=>SchoolClasses::class_name(),

        ]);
        $student =SundaySchoolStudents::create([
            'class_ID'=>SchoolClasses::id(),
             'name'=> $request->name,
             'adge'=> $request->adge,
             'gender'=>$request->gender,
    
    ]);
        return redirect()->back();
    }
}
