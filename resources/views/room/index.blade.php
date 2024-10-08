<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>room一覧表示</title>
</head>
<body>
    <div class="mx-auto px-6">
        <h3>ROOM一覧表示</h3>
        @foreach($posts as $room)
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">
             <h3 class="p-4 text-lg font-semibold">部屋ID :
                 {{$room->room_type_master_id}}/部屋種別PKID :{{$room->room_type_master->id??'エラー'}}
             </h3>
                <hr class="w-full">
                <p class="mt-4 p-4">部屋番号 :
                {{$room->room_number}}
                </p>

                <!-- Room_type_master 情報 -->
                <h4 class="p-4 text-lg font-semibold">部屋種別マスタ</h4>
                <p>名        称 : {{$room->room_type_master->room_name}}</p>
                <p>宿泊可能人数 : {{$room->room_type_master->stay_number}}</p>

                {{-- Reserv_detail情報 --}}
                <h4>予約明細</h4>
                <p>予約ID : {{$room->reservations->first()->id}} </p>
                <p>部屋ID : {{$room->reservations->first()->pivot->room_id}} </p>
                <p>宿泊日 : {{$room->reservations->first()->pivot->stay_day}} </p>
                <p>宿泊料 : {{$room->reservations->first()->pivot->stay_price}} </p>
                {{-- <p>予約明細 :  {{$room->reservations}} </p> --}}

            </div>
        @endforeach
    </div>
</body>
</html>