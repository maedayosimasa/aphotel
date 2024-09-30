<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reserv_detil一覧表示</title>
</head>
<body>
    <div class="mx-auto px-6">
        <h3>RESERV_DETAIL一覧表示</h3>
        @foreach($posts as $reserv_detail)
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">
             <h3 class="p-4 text-lg font-semibold">予約ID :
                 {{$reserv_detail->reservation_id}}
             </h3>
                <hr class="w-full">
                <p class="mt-4 p-4">部屋ID :
                {{$reserv_detail->roomid}}
                </p>
                <p class="mt-4 p-4">宿泊日 :
                {{$reserv_detail->stay_day}}
                </p>
                 <p class="mt-4 p-4">宿泊料 :
                {{$reserv_detail->stay_price}}
                </p>
            </div>
        @endforeach
    </div>
</body>
</html>