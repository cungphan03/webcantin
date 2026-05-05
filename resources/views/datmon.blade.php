<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="{{ asset('css/datmon.css') }}">
    </head>
    <body>
        <a href="{{ url('/menu') }}" class="btn-back">&larr; </a>
        <h1>Đặt món</h1>

        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif
        <div class="order-box">
            <img src="{{ asset('images/' . $dish->image) }}" alt="{{ $dish->name }}">
            <h2>{{ $dish->name }}</h2>
            <p>Giá: {{ number_format($dish->price) }} VND</p>
            <p>{{ $dish->description }}</p>
            <form action="{{ route('datmon.store') }}" method="POST">
                @csrf
                <input type="hidden" name="dish_id" value="{{ $dish->id }}">
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit">Đặt món</button>
            </form>
        </div>

    </body>
    
</html>