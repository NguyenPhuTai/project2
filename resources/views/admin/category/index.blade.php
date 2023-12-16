@extends('master.admin')
@section('title','Danh sách Danh mục')
@section('main')

<form action="" method="POST" class="form-inline" role="form">

    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="email" class="form-control" id="" placeholder="Tìm kiếm">
    </div>



    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
    <a href="{{route('category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>Thêm mới Danh mục</a>
</form>

<br>


<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Danh mục</th>
            <th>Trạng thái</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $model)
        <tr>
            <td>{{$model->id}}</td>
            <td>{{$model->name}}</td>
            <td>{{$model->status==0?'Hết hàng':'Còn hàng'}}</td>
            <td class="text-right">
                <form action="{{route('category.destroy',$model->id)}}" method="post" onsubmit="return confirm('Chac chan xoa?')">
                    @csrf @method('DELETE')
                    <a href="{{route('category.edit',$model->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>Sửa</a>
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@stop()