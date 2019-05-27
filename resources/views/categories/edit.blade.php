@extends('layouts.admin')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h4>Chỉnh sửa thể loại</h4>
            </div>
            <div class="col-12">
                <form method="post" action="{{(route('categories.update', $category->id))}}">
                    @csrf
                    <div class="form-group">
                        <label>Thể loại</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection