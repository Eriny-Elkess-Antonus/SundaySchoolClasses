@extends('layouts.app')

@section('content')
 <div class="container">
 <div class="row">
      <div class="col">
      <div class="form-group">
          <label for="exampleFormControlInput1"> {{$$class->className}}</label>
         
        </div>
        <div class="jumbotron">
            <h1 class="display-4" style="text-align: center">All Students  </h1>
            <div class="row">
            <a class="btn btn-success" href="{{route('create.student')}}"> Create Student</a>
            <a class="btn btn-success" href="{{route('SundaySchool.index')}}"> back</a>
           </div>
           </div>
      </div>
    </div>

    
   @if ($students->count() > 0 )
 <<div class="container"> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Students Name</th>
      <th scope="col">Students Age</th>
      <th scope="col">Students Gender</th>
      <th scope="col" style="width: 400px">Actions</th>
    </tr>
  </thead>
  <tbody>
  @php
       $i = 0;
   @endphp
    @foreach($students as $item)
    <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->adge}}  </td>
      <td>{{$item->gender}}  </td>
      <td>
     </td>
    
            @endforeach

        </tbody>
      </table>

 @else
       
        <div class="col">
            <div class="alert alert-danger" role="alert">
              No Students Yet
              </div>
        </div>

        @endif

</div>

@endsection

