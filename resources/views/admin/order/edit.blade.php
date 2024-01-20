@extends('master.admin')
<base href="/">
@section('title','Sửa Đơn hàng số: '.$data->first()->id )
@section('main')

<div class="row">
    <form action="{{route('order.edit',$data->first()->id)}}" method="POST">
        @csrf @method('PUT')

        <div class="form-group">
            <label for="">Trạng thái</label>

            <div class="radio">
                <label>
                    <input type="radio" name="status" value="1" {{$data->first()->status==1?'checked':''}}>
                    Đã xác nhận
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="0" {{$data->first()->status==0?'checked':''}}>
                    Chưa xác nhận
                </label>
            </div>
            <button type="submit">Lưu</button>
    </form>
</div>

@stop