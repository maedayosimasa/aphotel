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
            </div>
        @endforeach
    </div>
</body>
</html>