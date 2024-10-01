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
        <title>guest入力</title>
    </head>
    <body>
        
    <div>
        @if (session('message'))
        <div class="text-red-600 font-bold">
            {{session('message')}}
        </div>  
        @endif
        <form method="post" action="{{route('guest.store')}}">
            @csrf
             <div>
                <label for="username">氏名：</label>
                {{-- <x-input-error :messages="$errors->get('username')" class="mt-2" /> --}}
                <input type="text" name="username">
                {{-- value="{{old('username')}}"> --}}
            </div>
            <div>
                <label for="address">住所：</label>
                {{-- <x-input-error :messages="$errors->get('address')" class="mt-2" /> --}}
                <input type="text" name="address">
                {{-- value="{{old('username')}}"> --}}
            </div>
            <div>
                <label for="tel">電話番号：</label>
                {{-- <x-input-error :messages="$errores->get('tel')" class="mt-2" /> --}}
                <input type="tel" name="tel">
                {{-- value="{{old('username')}}"> --}}
            </div>
            <input type="submit" value="送信"> 
        
        </form> 
    </div>

    </body>
    </html>
{{-- </x-app-layout> --}}