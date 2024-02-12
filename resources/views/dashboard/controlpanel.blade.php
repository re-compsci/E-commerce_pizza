@extends('layouts.dashboard')

@section('content')
<div class="row m-5">
<div class="card">
    <div class="card-body">
      <table class="table table-striped">
            <thead>
            
                <th>رقم العنصر </th>
                <th>اسم العنصر </th>
                <th>اسم المجموعة </th>
                <th>السعر </th>
                <th>الوصف </th>
                <th>السعرات</th>
            

            </thead>
            <tbody>
                @if($data != null)
                @foreach($data as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->itemName}}</td>
                    <td>{{$row->itemgroupName}}</td>
                    <td>{{$row->price}}</td>
                    <td>{{$row->desc}}</td>
                    <td>{{$row->callories}}</td>
                </tr>
            
                @endforeach
                    @endif
            </tbody>
        </table>
    </div>

    </div>   
</div>

@endsection