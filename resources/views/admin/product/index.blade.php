@extends('master.admin')
@section('title','Danh sách Sản phẩm')
@section('main')

<form action="" method="POST" class="form-inline" role="form">

    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="email" class="form-control" id="" placeholder="Tìm kiếm">
    </div>



    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
    <a href="{{route('product.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>Thêm mới Sản phẩm</a>
</form>

<br>


<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Sản phẩm</th>
            <th>Ảnh</th>
            <th>Danh mục</th>
            <th>Giá</th>
            <th>Trạng thái</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $model)
        <tr>
            <td>{{$loop->index +1}}</td>
            <td>{{$model->name}}</td>
            <td>
                <img src="uploads/product/{{$model->image}}" width="40">
            </td>
            <td>{{$model->cat->name}}</td>
            <td>{{$model->price}} <span class="label label-success">{{$model->sale_price}}</span></td>
            <td>{{$model->status ==0 ? 'Het hang':'Con hang'}}</td>
            <td class="text-right">
                <form action="{{route('product.destroy',$model->id)}}" method="post" onsubmit="return confirm('Chac chan xoa?')">
                    @csrf @method('DELETE')
                    <a href="{{route('product.edit',$model->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>Sửa </a>
                    <button  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@stop()