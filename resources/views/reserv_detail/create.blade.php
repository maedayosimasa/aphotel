{{-- <x-app-layout>
    <x-slot name="header">
        <h2>利用者フォーム</h2>
    </x-slot> --}}
    <!DOCTYPE html>
    <html lang="jp">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        
    <div>
        <form action="">
            <h2>予約明細フォーム</h2>
             <div>
                <label for="reserv_detail">予約明細ID：</label>
                <input type="text" name="reserv_detail">
            </div>
            <div>
                <label for="reservid">予約ID：</label>
                <input type="text" name="reservid">
            </div>
            <div>
                <label for="roomid">部屋ID：</label>
                <input type="tel" name="roomid">
            </div>
            <div>
                <label for="stay_day">宿泊日：</label>
                <input type="text" name="stay_day">
            </div>
            <div>
                <label for="stay_price">宿泊料：</label>
                <input type="text" name="stay_price">
            </div>
            <input type="submit" value="送信"> 
        
        </form> 
    </div>

    </body>
    </html>
{{-- </x-app-layout> --}}