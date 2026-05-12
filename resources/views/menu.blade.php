<!DOCTYPE html>
<html>
    <head>
        <title>Menu</title>
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    </head>
   <body>
         <nav>
            <a href="/home">Trang chủ</a>
            <a href="/menu">Thực đơn</a>
            <a href="/thanhtoan">Thanh toán</a>
            <a href="/login">Đăng nhập</a>
            <a href="/register">Đăng ký</a>
        </nav>
        <h1>Thực đơn hôm nay</h1><hr>
        
            <h1>ĐỒ ĂN SÁNG</h1>
        <div class="bq">    
        <div class="ma">
            @foreach($ansang as $dish)
                <div class="card">
                    <img src="{{ asset('images/' . $dish->image) }}" alt="">
                    <h3>{{ $dish->name }}</h3>
                    <p>{{ $dish->price }} VND</p>
                    <p>{{ $dish->description }}</p>
                    @auth
                        <a href="{{ url('/datmon/'.$dish->id) }}" class="btn">Đặt món</a>
                    @else
                        <a href="{{ route('login') }}" class="btn">Đăng nhập để đặt món</a>
                    @endauth
                </div>
            @endforeach
        </div>
        </div>
        <h1>ĐỒ ĂN VẶT</h1>
        <div class="bq">
        <div class="ma">
            @foreach($anvat as $dish)
                <div class="card">
                    <img src="{{ asset('images/' . $dish->image) }}" alt="">
                    <h3>{{ $dish->name }}</h3>
                    <p>{{ $dish->price }} VND</p>
                    <p>{{ $dish->description }}</p>
                    @auth
                        <a href="{{ url('/datmon/'.$dish->id) }}" class="btn">Đặt món</a>
                    @else
                        <a href="{{ route('login') }}" class="btn">Đăng nhập để đặt món</a>
                    @endauth
                </div>
            @endforeach
        </div>
        </div>
        <h1>NƯỚC UỐNG</h1>
        <div class="bq">
        <div class="ma">
            @foreach($nuocuong as $dish)
                <div class="card">
                    <img src="{{ asset('images/' . $dish->image) }}" alt="">
                    <h3>{{ $dish->name }}</h3>
                    <p>{{ $dish->price }} VND</p>
                    <p>{{ $dish->description }}</p>
                    @auth
                        <a href="{{ url('/datmon/'.$dish->id) }}" class="btn">Đặt món</a>
                    @else
                        <a href="{{ route('login') }}" class="btn">Đăng nhập để đặt món</a>
                    @endauth
                </div>
            @endforeach
        </div>
        </div>
        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Đăng xuất</button>
            </form>
        @endauth     
        <footer>
            <div class="chan">
                <div class="chu">
                    <h3>SDT:0905320158</h3>
                    <h3>Email: Webcantin.com</h3>
                    <h3>Địa chỉ: Trường đại học Phú Yên</h3>
                </div>
                
            </div>
        </footer>
   </body>
    
</html>