@extends('master.admin')
<base href="/">
@section('title','Thêm mới Danh mục')
@section('main')

<div class="row">
    <div class="col-md-4">
        
        <form action="{{route('category.store')}}" method="POST" role="form">
            @csrf
            <div class="form-group">
                <label for="">Tên Danh mục</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Nhập Danh mục">
            </div>
        
            <div class="form-group">
                <label for="">Trạng thái</label>

                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="inputstatus" value="1" checked="checked">
                        Còn hàng
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="inputstatus" value="0">
                        Hết hàng
                    </label>
                </div>
            </div>
        
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Lưu</i></button>
        </form>
        
    </div>
</div>


@stop()