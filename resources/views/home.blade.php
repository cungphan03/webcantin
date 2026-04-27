<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        
    </head>
    <body>
        <header>
            
            <h1>CĂN TIN SINH VIÊN</h1>
            <div class="qb">
                <h3>Món ngon, giá sinh viên, tận tâm phục vụ</h3>
            </div>
            
        </header>
        <div class="bia">
            <h1>WELCOME</h1>
            <img src="{{ asset('images/bia.jpg') }}" alt="">
        </div>
        <nav>
            <a href="/home">Trang chủ</a>
            <a href="/menu">Thực đơn</a>
            <a href="/login">Đăng nhập</a>
            
        </nav>
        <h1 class="td"> MÓN ĂN NỔI BẬT</h1>
        <div class="menu">
            <div class="item">
            <img src="{{ asset('images/banhgaocay.jpg') }}" alt="">
            <p><h2>Bánh gạo cay</h2></p>
            </div>
            <div class="item">
            <img src="{{ asset('images/banhxeo.jpg') }}" alt="">
            <p><h2>Bánh xèo</h2></p>
            </div>
            <div class="item">
            <img src="{{ asset('images/banhuot.jpg') }}" alt="">
            <p><h2>Bánh ướt</h2></p>
            </div>
            <div class="item">
            <img src="{{ asset('images/comchien.jpg') }}" alt="">
            <p><h2>Cơm chiên</h2></p>
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