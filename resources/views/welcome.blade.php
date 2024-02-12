@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row m-3">
    <div class="col">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/A1.jpeg" class="d-block w-100" alt="..." width="300" height="300">
    </div>
    <div class="carousel-item">
      <img src="imgs/A2.jpg" class="d-block w-100" alt="..." width="300" height="300">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
  </div>

    <div class="row row-cols-2 row-cols-md-2 ms-4">
        @if($data!= null)
          @foreach($data as $row)
            <div class="col g-2 d-flex justify-content-evenly">
              <a href="{{route('Items',['id'=>$row->id])}}" class="">
                <div class="card mt-3" style="width: 18rem; height: 16rem">
                  <img src="/storage/{{$row->groupImg}}" class="card-img-top img-fluid" style="width:300px; height:250px;" alt="..."  >
                  <div class="card-body">
                    <p class="card-title">{{$row->itemgroupName}}  </p>
                  </div>
                </div> 
              </a>
            </div> 
          @endforeach
        @endif
      </div>
</div>
@endsection