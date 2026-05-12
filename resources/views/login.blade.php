<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <head>
         <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    </head>
</head>
<body>
<nav>
            <a href="/home">Trang chủ</a>
            <a href="/menu">Thực đơn</a>
            <a href="/thanhtoan">Thanh toán</a>
            <a href="/login">Đăng nhập</a>
            <a href="/register">Đăng ký</a>
            
        </nav>
<h2>Đăng nhập</h2>

<form method="POST" action="/login">
    @csrf

    <input type="email" name="email" placeholder="Email"><br><br>

    <input type="password" name="password" placeholder="Mật khẩu"><br><br>

    <button type="submit">Đăng nhập</button>
</form>

<a href="/register">Chưa có tài khoản? Đăng ký</a>

</body>
</html>