@extends('master.admin')
<base href="/">
@section('title','Thêm mới Sản phẩm')
@section('main')

<div class="row">
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-9">
            <div class="form-group">
                <label for="">Danh mục Sản phẩm</label>
                <select name="category_id" class="form-control">
                    <option value="">--Mời chọn--</option>
                    @foreach($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Tên Sản phẩm</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Nhập tên Sản phẩm">
            </div>

            <div class="form-group">
                <label for="">Mô tả sản phẩm</label>
                <textarea name="description" class="form-control description" placeholder="Nhập mô tả sản phẩm ">{{old('description')}}</textarea>
            </div>

            <div class="form-group">
                <label for="">Thêm nhiều ảnh</label>
                <input type="file" name="other_img[]" class="form-control" id="" multiple onchange="showOtherImage(this)">
                <hr>
                <div class="row" id="show_other_img">
                    <div class="thumbnail col-md-3">
                        <img src="" alt=""  >
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" name="price" class="form-control" value="{{old('price')}}" placeholder="Giá">
            </div>
            <div class="form-group">
                <label for="">Giảm giá</label>
                <input type="text" name="sale_price" class="form-control" value="{{old('sale_price')}}" placeholder="Giảm giá">
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

                <div class="form-group">
                    <label for="">Ảnh đại diện</label>
                    <input type="file" name="img" class="form-control" id="" onchange="showImage(this)">
                    <img src="" alt="" id="show_img">
                </div>
                <button type="submit">Lưu</button>
            </div>

        </div>
    </form>
</div>


@stop()

@section('css')
<link rel="stylesheet" href="ad_assets/plugins/summernote/summernote.min.css">
@stop()

@section('js')
<script src="ad_assets/plugins/summernote/summernote.min.js"></script>
<script>
    $('.description').summernote({
        height: 250
    });

    function showImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#show_img').attr('src', e.target.result).width(200).height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function showOtherImage(input) {
        if (input.files && input.files.length) {
            var _html = '';
            for (let i = 0; i < input.files.length; i++) {
                var file = input.files[i];
                var reader = new FileReader();

                reader.onload = function(e) {
                    _html += `
                    <div class="thumbnail col-md-3">
                        <img src="${e.target.result}" alt="">
                    </div>
                    `;
                    $('#show_other_img').html(_html)

                };

                reader.readAsDataURL(file);

            }

        }
    }
</script>
@stop()