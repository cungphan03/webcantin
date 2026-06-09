<!DOCTYPE html>
<html>
<head>
    <title>Thanh toán</title>
    <link rel="stylesheet" href="{{ asset('css/thanhtoan.css') }}">
</head>
<body>

<nav>
    <a href="/home">Trang chủ</a>
    <a href="/menu">Thực đơn</a>
    <a href="/thanhtoan">Thanh toán</a>
    <a href="/login">Đăng nhập</a>
    <a href="/register">Đăng ký</a>
</nav>

<h1>Đơn hàng của bạn</h1>

@if(session('success'))
    <h3 style="color: green">{{ session('success') }}</h3>
@endif

@if(session('error'))
    <h3 style="color: red">{{ session('error') }}</h3>
@endif

@if($orders->isEmpty() && !session('success'))
    <p>Bạn chưa đặt món nào.</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>Hình</th>
        <th>Tên món</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        <th>Hành động</th>
    </tr>

    @php $total = 0; @endphp

    @foreach($orders as $order)
        @php
            $thanhtien = $order->quantity * $order->dish->price;
            $total += $thanhtien;
        @endphp

        <tr>
            <td>
                <img src="{{ asset('images/' . $order->dish->image) }}" width="80">
            </td>
            <td>{{ $order->dish->name }}</td>
            <td>{{ number_format($order->dish->price) }} VND</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ number_format($thanhtien) }} VND</td>
            <td>
        <form action="{{ route('order.delete', $order->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button style=" background:red; color: white;" 
            onclick="return confirm('Bạn có chắc muốn hủy?'); ">
                Hủy đặt món
            </button>
        </form>
    </td>
        </tr>
    @endforeach

</table>

<h2>Tổng tiền: {{ number_format($total) }} VND</h2>

<form action="{{ route('thanhtoan.xuly') }}" method="POST">
    @csrf
    <div class="bt"> 
        <button type="submit">Thanh toán</button>
    </div>
    
</form>

</body>
</html>