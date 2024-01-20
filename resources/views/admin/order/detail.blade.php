@extends('master.admin')
<base href="/">
@section('title','Chi tiết Đơn hàng số: '.$dataArray[0]->id_order )
@section('main')

<table class="table table-hover">
        <label>Tên Khách Hàng:</label>&ensp;{{$dataArray[0]->diachi_name}} <br>
        <label>Địa chỉ: </label>&ensp;{{$dataArray[0]->diachi_address}}- <b>Số điện thoại: </b> {{$dataArray[0]->diachi_phone}} <br>
        
    <label>Chi tiết sản phẩm:</label> <br>

    <thead>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
        </tr>
    </thead>
    <tbody>
        @php
        $totalPrice = 0;
        @endphp
        @foreach($dataArray as $data)
        <tr>
            <td>{{$data->product_name}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->price}}</td>
        </tr>
        @php
        $totalPrice += $data->price;
        @endphp
        @endforeach
        <tr>
            <td colspan="2"><b>Tổng số tiền thanh toán</b></td>
            <td>{{ $totalPrice }}</td>
        </tr>
    </tbody>
</table>


@stop