{{-- <x-app-layout>
    <x-slot name="header">
        <h2>利用者フォーム</h2>
    </x-slot> --}}
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        
    <div>
        <form method="post" action="{{route('room.store')}}">
            @csrf
             <div>
                <label for="roomid">部屋ID：</label>
                <input type="text" name="roomid">
            </div>
            <div>
                <label for="room_typeid">部屋種別ID：</label>
                <input type="text" name="room_typeid">
            </div>
            <div>
                <label for="room_number">部屋番号：</label>
                <input type="text" name="room_number">
            </div>
            <input type="submit" value="送信"> 
        
        </form> 
    </div>

    </body>
    </html>
{{-- </x-app-layout> --}}