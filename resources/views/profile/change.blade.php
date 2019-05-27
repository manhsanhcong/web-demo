@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h3>Thay đổi thông tin</h3></div>

                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div style="margin: auto">
                        <form class="form-horizontal" method="POST" action="{{ route('changeProfile.store') }}">
                            @csrf

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="new-name" class="control-label" style="margin-left: 20px">Tên</label>

                                <div class="col-md-12">
                                    <input id="new-name" type="text" class="form-control" name="name"
                                           placeholder="name" value="{{ Auth::user()->name }}">
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="inputEmail4" class="control-label" style="margin-left: 20px">Email</label>

                                <div class="col-md-12">
                                    <input type="email" class="form-control" id="inputEmail4"
                                           value="{{ Auth::user()->email}}" disabled>

                                </div>
                            </div>

                            <div class="input-group col-md-12">
                                <label for="new-phone" class="control-label">Số điện thoại</label>
{{--                                <div class="input-group-prepend">--}}
{{--                                    <span class="input-group-text" id="phone">+84</span>--}}
{{--                                </div>--}}
                                <div>
                                    <input type="text" class="form-control" name="phone"
                                           value="{{ Auth::user()->phone}}" required aria-describedby="phone">
                                    @if ($errors->has('new-phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('new-phone')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="new-address" class="control-label" style="margin-left: 20px">Địa chỉ</label>

                                <div class="col-md-12">
                                    <input id="new-address" type="text" class="form-control" name="address"
                                           placeholder="address" value="{{ Auth::user()->address }}">
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('birth_day') ? ' has-error' : '' }}">
                                <label for="new-birth_day" class="control-label" style="margin-left: 20px">Ngày sinh</label>

                                <div class="col-md-12">
                                    <input id="new-birth_day" type="date" class="form-control" name="birth_day"
                                           placeholder="address" value="{{ Auth::user()->birth_day }}">
                                </div>
                            </div>

                            <div class="form-group" style="margin-right: auto">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        Lưu thay đổi
                                    </button>
                                    <a class="btn btn-primary" href="{{ url('/home') }}">Quay lại</a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
