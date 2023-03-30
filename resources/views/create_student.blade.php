@extends('layouts.app')

@section('content')

<div class="container">
 <div class="col">
    <form action="{{route('store.student')}}" method="POST" > 
        @csrf 
    
   
     <div class="form-group">
      <label for="exampleFormControlInput1" > Add student Name</label>
      <input type="text"  name="name" class="form-control"  placeholder="class Name" >
 
        </div>        
             
        <div class="form-group">
         <label for="exampleFormControlInput1"> Add Student age</label>
         <input type="text" name="adge" class="form-control" name="numberOfStudents" placeholder="number of students">
          </div>    

     <fieldset data-role="controlgroup">
      <legend>Choose  gender:</legend>
        <label for="male">Male</label>
        <input type="radio" name="gender"  value="male" checked>
        <label for="female">Female</label>
        <input type="radio" name="gender" value="female">
      </fieldset> 
           
          <div class="form-group">

            <button class="btn btn-danger" type="submit">save</button>
         </div>     
   </form>
 </div>
 </div>          
 @endsection