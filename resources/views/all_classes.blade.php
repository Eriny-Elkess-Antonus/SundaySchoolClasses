@extends('layouts.app')

@section('content')
 <div class="container">
 <div class="row">
      <div class="col">
        <div class="jumbotron">
            <h1 class="display-4" style="text-align: center">All Classes  </h1>
            <a class="btn btn-success" href="{{route('SundaySchool.create')}}"> Create Class</a>
           </div>
      </div>
    </div>

    
   @if ($classes->count() > 0 )
 <div class="col">
  @foreach ($classes as $item)
 <div class="card text-center">
  <div class="card-body">
    <h5 class="card-title"> {{$item->className}}</h5>
    <p class="card-text">{{$item->numberOfStudents}}</p>
    <a href="{{route('SundaySchool.show',$item->className)}}" class="btn btn-primary">Show Students</a>
  </div>
  
 </div>
 @endforeach

 @else
       
        <div class="col">
            <div class="alert alert-danger" role="alert">
              No Classes Yet
              </div>
        </div>

        @endif

</div>

@endsection




