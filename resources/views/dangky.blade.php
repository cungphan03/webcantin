<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
         <link rel="stylesheet" href="{{ asset('css/dangki.css') }}">
</head>
<body>
<nav>
            <a href="/home">Trang chủ</a>
            <a href="/menu">Thực đơn</a>
            <a href="/thanhtoan">Thanh toán</a>
            <a href="/login">Đăng nhập</a>
            <a href="/register">Đăng ký</a>
            
        </nav>
<h2>Đăng ký</h2>

@if ($errors->any())
    <div style="color:red;padding-left:70px;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form method="POST" action="/register">
    @csrf

    <input type="text" name="name" placeholder="Tên" value="{{ old('name') }}"><br><br>

    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br><br>

    <input type="password" name="password" placeholder="Mật khẩu"><br><br>

    <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu"><br><br>

    <button type="submit">Đăng ký</button>
</form>

<a href="/login">Đã có tài khoản? Đăng nhập</a>

</body>
</html>