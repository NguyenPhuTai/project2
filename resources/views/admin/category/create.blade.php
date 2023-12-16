@extends('master.admin')
<base href="/">
@section('title','Add new Category')
@section('main')

<div class="row">
    <div class="col-md-4">
        
        <form action="{{route('category.store')}}" method="POST" role="form">
            @csrf
            <div class="form-group">
                <label for="">Category name</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Input Category name">
            </div>
        
            <div class="form-group">
                <label for="">Status</label>

                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="inputstatus" value="1" checked="checked">
                        Con hoat dong
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="inputstatus" value="0">
                        Khong hoat dong
                    </label>
                </div>
            </div>
        
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Save</i></button>
        </form>
        
    </div>
</div>


@stop()