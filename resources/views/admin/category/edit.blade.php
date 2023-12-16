@extends('master.admin')
@section('title','Add new Category: '.$category->name)
@section('main')

<div class="row">
    <div class="col-md-4">
        
        <form action="{{route('category.update',$category->id)}}" method="POST" role="form">
            @csrf @method('PUT')
            <div class="form-group">
                <label for="">Category name</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="Input Category name">
            </div>
        
            <div class="form-group">
                <label for="">Status</label>

                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="inputstatus" value="1" {{$category->status==1?'checked':''}}>
                        Con hoat dong
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="inputstatus" value="0" {{$category->status==0?'checked':''}}>
                        Khong hoat dong
                    </label>
                </div>
            </div>
        
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Save</i></button>
        </form>
        
    </div>
</div>


@stop()