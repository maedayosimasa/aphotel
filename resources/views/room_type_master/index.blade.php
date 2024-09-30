<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>room_type_master一覧表示</title>
</head>
<body>
    <div class="mx-auto px-6">
        <h3>ROOM_TYPE_MASTER一覧表示</h3>
        @foreach($posts as $room_type_master)
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">
             <h3 class="p-4 text-lg font-semibold">
              名称 :{{$room_type_master->room_name}}
             </h3>
                <hr class="w-full">
                <p class="mt-4 p-4">宿泊可能人数 :
                {{$room_type_master->stay_number}}
                               {{-- <div class="p-4 text-sm font-semibold">
                 <p>
                    {{$reservation->created_at}} / {{$reservation->id}}
                 </p>
                </div> --}}
            </div>
        @endforeach
    </div>
</body>
</html>