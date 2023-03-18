@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
      <div class="col">
        <div class="jumbotron">
            <h1 class="display-4" style="text-align: center">All Classes  </h1>
            <a class="btn btn-success" href="{{route('class.create')}}"> Create Class</a>
           </div>
      </div>
    </div>
    </div>
    
    @if ($classes->count() > 0 )
<div class="col">
@foreach ($classes as $item)
<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Name: {{$item['class_name']}}</h5>
    <p class="card-text">Number:{{$item['number_ofstudents']}}</p>
    <a href="{{route('class.show')}}" class="btn btn-primary">Show Students</a>
  </div>
  
</div>
@endforeach

@else
       
        <div class="col">
            <div class="alert alert-danger" role="alert">
              Not Classes Yet
              </div>
        </div>

        @endif

</div>



@endsection




