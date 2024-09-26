<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>一覧表示</title>
</head>
<body>
    <div class="mx-auto px-6">
        <h3>一覧表示</h3>
        @foreach($posts as $reservation)
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">
             <h3 class="p-4 text-lg font-semibold">
                {{$reservation->id}}
             </h3>
                <hr class="w-full">
                <p class="mt-4 p-4">
                {{$reservation->guest_id}}/ {{$reservation->guest->id??'エラー'}}
                </p>
                <p class="mt-4 p-4">
                {{$reservation->number}}
                </p>
                <p class="mt-4 p-4">
                {{$reservation->inday}}
                </p>
                <p class="mt-4 p-4">
                {{$reservation->outday}}
                </p><br><br><br>
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