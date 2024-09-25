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
        <form method="post" action="{{route('room_type_master.store')}}">
            @csrf
             <div>
                <label for="room_type">部屋種別：</label>
                <input type="text" name="room_type">
            </div>
            <div>
                <label for="room_name">名称：</label>
                <input type="text" name="room_name">
            </div>
            <div>
                <label for="stay_number">宿泊可能人数：</label>
                <input type="text" name="stay_number">
            </div>
            <input type="submit" value="送信"> 
        
        </form> 
    </div>

    </body>
    </html>
{{-- </x-app-layout> --}}