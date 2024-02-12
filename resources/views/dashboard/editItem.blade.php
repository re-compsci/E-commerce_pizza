@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row">
      <div class="col">
          <div class="card">
               <div class="card-body">
                   <form action="{{route('updateI')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row d-flex justify-content-center row-cols-2 row-cols-lg-3 g-2 g-lg-2">
                            <div class="col-sm-8">
                            <input type="hidden" class="form-control form-control-sm " name="id" value="{{$item->id}}">
                                <label for="itemName" class="p-2"> اسم المنتج</label>
                                <input type="text" class="form-control form-control-sm " name="itemName" value="{{$item->itemName}}">

                                <label for="callories" class="p-2">السعرات الحرارية</label>
                                <input type="text" class="form-control form-control-sm " name="callories" value="{{$item->callories}}">
                      
                                <label for="desc" class="p-2">الوصف</label>
                                <input type="text" class="form-control form-control-sm " name="desc" value="{{$item->desc}}">
                        
                                <label for="price" class="p-2">السعر</label>
                                <input type="number" class="form-control form-control-sm " name="price" value="{{$item->price}}">
                                
                                <label for="itemgroupno" class="p-2"> مجموعة المنتج</label>
                                <select name="itemgroupno" class="form-select ">
                                 
                                    @foreach($itemgroup as $row)
                                    @if($row->id == $item->itemgroupno)
                                    <option value="{{$row->id}}">{{ $row->itemgroupName}}</option>
                                    @endif
                                    @endforeach  

                                    @foreach($itemgroup as $row)
                                    @if($row->id != $item->itemgroupno)
                                    <option value="{{$row->id}}">{{ $row->itemgroupName}}</option>
                                    @endif
                                    @endforeach 
                                </select> 

                                <label for="itemImg" class="p-2"> صورة النتج</label>
                                <input type="file" class="form-control form-control-sm " name="itemImg" value="{{$item->itemImg}}" >
                            </div>
                            <div class="col-sm-4">
                            <img src="/storage/{{$item->itemImg}}"class="card-img-top" alt="...">
                            </div>                             
                            <div class="text-center">
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
