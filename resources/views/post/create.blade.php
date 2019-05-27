@extends('layouts.admin')

@section('content')
    <div class="content">
        <h4>Thêm bài viết mới</h4>
        <div class="col-12">
            <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tiêu đề chính</label>
                    <input type="text" name="title" class="form-control"/>
                    @if($errors->has('title'))
                        <p class="help is-danger" style="color: red;">{{ $errors->first('title') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Chuyên mục</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" id="content" type="text" name="content"></textarea>
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                        CKEDITOR.replace('content', {
                            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                        });
                    </script>
                    @if($errors->has('content'))
                        <p class="help is-danger" style="color: red;">{{ $errors->first('content') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Ảnh đại diện</label>
                    <input type="file" name="avatar" class="form-control-file">
                    @if($errors->has('avatar'))
                        <p class="help is-danger" style="color: red;">{{ $errors->first('avatar') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-primary" onclick="window.history.go(-1); return false;">Quay lại</button>
            </form>
        </div>
    </div>
@endsection
