<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- header -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="logo" href="#"><img src="/images/design-logo.png" alt="Logo Suncloud"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav" href="/">Trang chủ<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav" href="{{ route('cloudserver') }}">Cloud Server</a>
            </li>
            <li class="nav-item">
                <a class="nav" href="{{ route('thuemaychurieng') }}">Thuê máy chủ riêng</a>
            </li>
            <li class="nav-item">
                <a class="nav" href="{{ route('thuechodatmaychu') }}">Thuê chỗ đặt máy chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav" href="{{ route('giaiphapmaychu')  }}">Giải pháp máy chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav" href="{{ route('home.tintuc') }}">Tin tức</a>
            </li>
            <li class="nav-item">
                <a class="nav" href="{{ route('lienhe') }}">Liên hệ</a>
            </li>
        </ul>
    </div>
</nav>
<!-- end header -->

@yield('content')
</body>
</html>
