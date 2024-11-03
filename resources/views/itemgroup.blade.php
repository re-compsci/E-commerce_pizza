@extends('layouts.app')

@section('content') 
  <div class="container overflow-hidden">
    <h1 class="alert alert-success text-center">أهلاً بكم في موقعي</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 text-center d-flex align-items-center justify-content-center">
     @if($data!= null)
        @foreach($data as $row)
      <div class="col-sm-6 text-center">
       
        <a href="{{route('Items',['id'=>$row->id])}}">
        <div class="card h-100" style="width: 18rem;">
        <img src= "{{asset('storage/' . $row->groupImg)}}" class="card-img-top" alt="..." height="265">
        <div class="card-body">
        <p class="card-text">{{$row->itemgroupName}}  </p>
       </div>
    </div>
       
        </a>
      </div> 
        @endforeach
        @endif
    </div>
  </div>
@endsection