@extends('layouts.admin')

@section('content')
    <div class="col-9 col-md-9">
        <div class="row">
            <div class="col-12">
                <h4>Thêm mới thể loại</h4>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Thể loại</label>
                        <input type="text" class="form-control" name="name" placeholder="Nhập thể loại cần thêm" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-primary" onclick="window.history.go(-1); return false;">Quay lại</button>
                </form>
            </div>
        </div>
    </div>
@endsection