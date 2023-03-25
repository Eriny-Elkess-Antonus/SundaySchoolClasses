<?php
namespace App\models;
namespace App\Http\Controllers;

use App\Models\SchoolClasses;
use App\Models\SundaySchoolStudents;
use Illuminate\Http\Request;


class SundayStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=SundaySchoolStudents::all();
        return view('show_class_details',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStudent()
    {
        return view('create_student');
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

   
}
