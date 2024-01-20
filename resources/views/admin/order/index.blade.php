@extends('master.admin')
@section('title','Danh sách Đơn Hàng')
@section('main')

<form action="" method="POST" class="form-inline" role="form">

    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="email" class="form-control" id="" placeholder="Tìm kiếm">
    </div>
</form>

<br>


<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Khách Hàng</th>
            <th>Giá</th>
            <th>Địa Chỉ</th>
            <th>Ghi Chú</th>
            <th>Trạng thái</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $model)
        <tr>
            <td>{{$model->id}}</td>
            <td>{{$model->cat->name}}</td>
            <td>{{$model->price}}</td>
            <td>{{$model->add->address}}</td>
            <td>{{$model->note}}</td>
            <td>{{$model->status ==0 ? 'Chưa xác nhận':'Đã xác nhận'}} &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{route('order.edit',$model->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>Sửa</a>
            </td>
            <td><a href="{{route('order.detail',$model->id)}}">Xem chi tiết Đơn hàng</a></td>
        </tr>
        @endforeach
    </tbody>
</table>


@stop()