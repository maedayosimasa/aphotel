<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reservaton一覧表示</title>
</head>
<body>
    <div class="mx-auto px-6">
        <h3>RESEVATION一覧表示</h3>
        @foreach($posts as $reservation)
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">
             <h3 class="p-4 text-lg font-semibold">
              利用者ID :{{$reservation->guest_id}}/PKID :{{$reservation->guest->id??'エラー'}}
             </h3>
                <hr class="w-full">
                <p class="mt-4 p-4">人 数 :
                {{$reservation->number}}
                </p>
                <p class="mt-4 p-4">チェックイン日:
                {{$reservation->inday}}
                </p>
                <p class="mt-4 p-4">チェックアウト日:
                {{$reservation->outday}}
                </p>
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