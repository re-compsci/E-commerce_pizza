        @extends('layouts.app')

        @section('content')
        <div class="container overflow-hidden">
        <h1 class="alert alert-light text-center">{{$group->itemgroupName}}</h1>
        <!--  

        <div class="row">
        <div class="col">
        <img src="/imgs/pizza-bg.jpeg" alt="" width="">
        </div>
        </div>
        
        -->
        <div class="row row-cols-4 row-cols-md-3 g-4d-flex align-items-center justify-content-center">
        @if($data!= null)
        @foreach($data as $row)
        <div class="col-sm-6 ">

        <div class="card h-100" style="width: 20rem;">
        <img src="/storage/{{$row->itemImg}}" class="card-img-top" alt="..."  height="265">

        <div class="card-body">
        <div class="row">
        <div class="col-sm-8">
        <h5 class="card-title text-center"><strong> {{$row->itemName}}</strong></h5>
        </div>
        <div class="col d-flex justify-content-end p-2">
        <p class="card-text">{{$row->callories}} Kcol</p>
        </div>
        </div>

        <p class="card-text">{{$row->desc}} </p>
        <div class="row">
        <div class="col">
        <a href="{{route('AddtoCart',['id'=>$row->id])}}" class="btn btn-primary">Add to cart</a>
        </div>
        <div class="col">
        <p class="card-text d-flex justify-content-end p-3"><strong> {{$row->price}} SAR</strong> </p>
        </div>
        </div>

        </div>
        </div>

        </div> 
        @endforeach
        @endif
        </div>
        </div>
        @endsection