@extends('layouts.app')

@section('content')

<div class="container">
 <div class="col">
   <form action="{{route('class.store')}}" method="POST" enctype="multipart/form-data"> 
    @csrf 
    <div><h4> Add Name of Class</h4>
   </div>
   <div class="form-group">
      <input type="text" class="form-control"  placeholder="class Name"  name= "class_name">
           <label for="exampleFormControlInput1"></label>
        </div>        
         
        <div><h4> Add Number of Students</h4></div>    
        <div class="form-group">
         <input type="number" class="form-control" name="number_of_students" placeholder="number of students">
          <label for="exampleFormControlInput1"> </label>
            </div>     
           
          <div class="form-group">

            <button class="btn btn-danger"type="submit">save</button>
         </div>     
   </form>
 </div>
 </div>          
 @endsection


 
    
        
                