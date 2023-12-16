@extends('master.admin')
@section('title','List Category')
@section('main')

<form action="" method="POST" class="form-inline" role="form">

    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="email" class="form-control" id="" placeholder="Input field">
    </div>



    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
    <a href="{{route('category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>Add new</a>
</form>

<br>


<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Category name</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $model)
        <tr>
            <td>{{$model->id}}</td>
            <td>{{$model->name}}</td>
            <td>{{$model->status==0?'Khong hoat dong':'Hoat dong'}}</td>
            <td class="text-right">
                <form action="{{route('category.destroy',$model->id)}}" method="post" onsubmit="return confirm('Chac chan xoa?')">
                    @csrf @method('DELETE')
                    <a href="{{route('category.edit',$model->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@stop()