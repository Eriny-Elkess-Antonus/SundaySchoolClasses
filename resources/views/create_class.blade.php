@extends('layouts.app')

@section('content')

<div class="container">
 <div class="col">
   <form action="{{route('class.store')}}" method="POST" enctype="multipart/form-data">  
    <div><h4> Add Name of Class</h4></div>
     <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="class Name">
           <label for="floatingInput"></label>
        </div>
         <div><h4> Add Number of Students</h4></div>
         <div class="form-floating">
         <input type="number" class="form-control" id="floatingPassword" placeholder="number of students">
          <label for="floatingPassword"> </label>
            </div>
                <div class="form-group">

                 <button class="btn btn-danger" href="{{route('get.allclasses')}}" type="submit">save</button>
                </div>
             </div>
          </div>
  </div>          
 @endsection


