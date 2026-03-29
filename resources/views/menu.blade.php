<!DOCTYPE html>
<html>
    <head>
        <title>Menu</title>
    </head>
   <body>
        <h1>Menu món ăn</h1>
        @if($dishes && count($dishes) > 0)
            @foreach($dishes as $dish)
                <div>
                    <h2>{{$dish->name}}</h2>
                    <p>{{$dish->price}} VND</p>
                    <p>{{$dish->description}}</p>
                </div>
                
            @endforeach
        @else
            <p>Chưa có món nào</p>
        @endif
        
   </body>
    
</html>