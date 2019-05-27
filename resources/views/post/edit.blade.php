@extends('layouts.admin')

@section('content')
    <div class="content">
        <h3>Chỉnh sửa bài viết</h3>
        <div class="col-12">
            <form method="post" action="{{(route('post.update', $post->id))}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$post->id}}"/>
                <div class="form-group">
                    <h4>Title</h4>
                    <input type="text" name="title" value="{{$post->title}}"
                           class="form-control"/>
                    @if($errors->has('title'))
                        <p class="help is-danger" style="color: red;">{{ $errors->first('title') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <h4>Category</h4>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option
                                    @if($post->category_id == $category->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <h4>Content</h4>
                    <textarea class="form-control" id="content" type="text" name="content">{{$post->content}}</textarea>
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                        CKEDITOR.replace('content', {
                            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                        }).setData(value);
                    </script>
                    @if($errors->has('content'))
                        <p class="help is-danger" style="color: red;">{{ $errors->first('content') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <h4>Ảnh đại diện</h4>
                    <p class="avatar"><img src="{{ asset('storage/'. $post->avatar) }}"
                                            style="height:250px; width:auto; margin-top: 20px">
                    </p>
                    <input type="file" name="avatar" class="form-control-file" value="{{ $post->avatar }}"/>
                    @if($errors->has('avatar'))
                        <p class="help is-danger" style="color: red;">{{ $errors->first('avatar') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
@endsection
