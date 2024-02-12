@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row">
      <div class="col">
          <div class="card">
               <div class="card-body">
                   <form action="{{route('additem')}}" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
                        @csrf
                        <div class="row d-flex justify-content-center row-cols-2 row-cols-lg-3 g-2 g-lg-2">
                            <div class="col">
                                <label for="itemName" class="p-2">ادخل اسم المنتج</label>
                                <input type="text" class="form-control form-control-sm " name="itemName">
                            </div>
                            <div class="col">
                                <label for="callories" class="p-2">السعرات الحرارية</label>
                                <input type="text" class="form-control form-control-sm " name="callories">
                            </div>
                            <div class="col">
                                <label for="desc" class="p-2">الوصف</label>
                                <input type="text" class="form-control form-control-sm " name="desc">
                            </div>
                            <div class="col">
                                <label for="price" class="p-2">السعر</label>
                                <input type="number" class="form-control form-control-sm " name="price">
                            </div>
                            <div class="col">
                                <label for="itemImg" class="p-2">ادخل صورة النتج</label>
                                <input type="file" class="form-control form-control-sm " name="itemImg" >
                            </div>
                            <div class="col">
                                <label for="itemgroupno" class="p-2">اختر مجموعة المنتج</label>
                                <select name="itemgroupno" class="form-select "> 
                                    @foreach($data2 as $row)
                                        <option value="{{$row->id}}">{{$row->itemgroupName}}</option>
                                    @endforeach
                                </select>  
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




    <div class="row">
        <div class="col">
            <div class="card mt-3">
                <div class="card-body">
                    <table class='table table-bordered text-center align-middle'>
                        <thead>
                            <tr>
                                <th>رقم المنتج </th>
                                <th>اسمه</th>
                                <th>سعراته </th>
                                <th>وصفه </th>
                                <th>سعره</th>
                                <th colspan="2">صورة المنتج</th>    
                                <th colspan="2">اجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->itemName}}</td>
                                <td>{{$row->callories}}</td>
                                <td>{{$row->desc}}</td>
                                <td>{{$row->price}}</td>
                                <td colspan="2"> <img src="/storage/{{$row->itemImg}}"class="rounded mx-auto d-block" alt="..." height="200" width="200" ></td>
                                <td><a href=" {{route('editI',['id'=>$row->id]) }}"><i class="bi bi-pencil-square text-success"></i></a></td> 
                                <td><a href=" {{route('delI',['id'=>$row->id]) }}"><i class="bi bi-trash text-danger"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection