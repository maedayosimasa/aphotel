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
        <title>reservation入力</title>
    </head>
    <body>
        
    <div>
         @if (session('message'))
        <div class="text-red-600 font-bold">
            {{session('message')}}
        </div>  
        @endif
        <form method="post" action="{{route('Reservation.store')}}">
            @csrf
            <h2>予約フォーム</h2>
             <div>
                <label for="guest_id">利用者ID：</label>
                <input type="text" name="guest_id">
            </div>
            <div>
                <label for="number">人数：</label>
                <input type="text" name="number">
            </div>
            <div>
                <label for="inday">チェックイン日付：</label>
                <input type="text" name="inday">
            </div>
            <div>
                <label for="outday">チェックアウト日付：</label>
                <input type="text" name="outday">
            </div>
            <input type="submit" value="送信"> 
        
        </form> 
    </div>

    </body>
    </html>
{{-- </x-app-layout> --}}