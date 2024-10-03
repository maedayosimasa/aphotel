
    <!DOCTYPE html>
    <html lang="jp">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>reserv_detail入力</title>
    </head>
    <body>
        
    <div>
         @if (session('message'))
        <div class="text-red-600 font-bold">
            {{session('message')}}
        </div>  
        @endif
        <form method="post" action="{{route('reserv_detail.store')}}">
            @csrf
            <h2>予約明細フォーム</h2>
            <div>
                <label for="reservation_id">予約ID：</label>
                <input type="text" name="reservation_id">
            </div>
            <div>
                <label for="room_id">部屋ID：</label>
                <input type="text" name="room_id">
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
