@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row">
       <div class="col">
          <div class="card">
              <div class="card-body">
                <form action="{{route('saveH')}}" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
                  <div class="row d-flex justify-content-center"> 
                                @csrf
                                <div class="col">
                                <label for="itemgroupName" class="p-2">ادخل اسم المجموعة</label>
                                <input type="text" class="form-control form-control-sm " name="itemgroupName" required >
                                </div>
                                <div class="col">
                                <label for="groupImg" class="p-2">ادخل صورة المجموعة</label>
                                <input type="file" class="form-control form-control-sm " name="groupImg" >
                            </div>
                                <div class="text-center mt-3">
                                    <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                                </div>
                            </form>
                    </div>
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
                                <th>رقم المجموعة </th>
                                <th>اسم المجموعة </th>
                                <th colspan="2">صورة المجموعة</th>
                                <th colspan="2">اجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td> {{$row->itemgroupName}}</td>
                                <td colspan="2"> <img src="{{Storage :: url($row->groupImg)}}"class="rounded mx-auto d-block" alt="..." height="200" width="200" ></td>
                                <td><a href=" {{route('editg',['id'=>$row->id ]) }}"><i class="bi bi-pencil-square text-success"></i></a></td> 
                                <td><a href=" {{route('delg',['id'=>$row->id]) }}"><i class="bi bi-trash text-danger"></i></a></td>
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