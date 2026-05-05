<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <nav>
            <a href="/home">Trang chủ</a>
            <a href="/menu">Thực đơn</a>
            <a href="/login">Đăng nhập</a>
            <a href="/login">Thanh toán</a>
        </nav>
<div class="login-box">
    <h2>Đăng nhập</h2>

    {{-- Thông báo lỗi --}}
    @if(session('error'))
        <p class="error">{{ session('error') }}</p>
    @endif

    {{-- Validate lỗi --}}
    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input type="email" name="email" placeholder="Nhập email" required>

        <input type="password" name="password" placeholder="Nhập mật khẩu" required>

        <button type="submit">Đăng nhập</button>
    </form>
    <div class="qv">
        <a href="/home" >← Quay về trang chủ</a>
    </div>
    
</div>
</body>
</html>