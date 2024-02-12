@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row">
       <div class="col">
          <div class="card">
              <div class="card-body">
                    <form action="{{route('updateg')}}" enctype="multipart/form-data" method="post">
                        <div class="row d-flex justify-content-center"> 
                            @csrf
                            <div class="col-sm-4">
                                <input type="hidden" class="form-control form-control-sm " name="id" value="{{$group->id}}">
                                <label for="itemgroupName" class="p-2"> اسم المجموعة</label>
                                <input type="text" class="form-control form-control-sm " name="itemgroupName" value="{{$group->itemgroupName}}" >
                                <label for="groupImg" class="p-2"> صورة المجموعة</label>                                
                                <input type="file" class="form-control form-control-sm " name="groupImg" value="/storage/{{$group->groupImg}}" >
                            </div>
                            <div class="col-sm-4">
                                <img src="/storage/{{$group->groupImg}}" alt="" height="200" width="200">
                            </div>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                            </div>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection