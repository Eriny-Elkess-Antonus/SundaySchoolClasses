@extends('layouts.app')

@section('content')

<div class="container">
 <div class="col">
    <form action="{{route('SundaySchool.store')}}" method="POST" > 
        @csrf 
    
   
     <div class="form-group">
      <label for="exampleFormControlInput1" > Add Name of Class</label>
      <input type="text"  name="className" class="form-control"  placeholder="class Name" >
 
        </div>        
             
        <div class="form-group">
         <label for="exampleFormControlInput1"> Add Number of Students</label>
         <input type="text" name="numberOfStudents" class="form-control" name="numberOfStudents" placeholder="number of students">
          </div>     
           
          <div class="form-group">

            <button class="btn btn-danger" type="submit">save</button>
         </div>     
   </form>
 </div>
 </div>          
 @endsection


 
    
        
                