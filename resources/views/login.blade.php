<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>

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