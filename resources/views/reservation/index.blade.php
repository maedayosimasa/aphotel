<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="mx-auto px-6">
        @foreach($reservation as $reservation)
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">
             <h1 class="p-4 text-lg font-semibold">
                {{reservation->title}}
             </h1>
                <hr class="w-full">
                <p class="mt-4 p-4">
                {{$reservation->body}}
                </p>
                <div class="p-4 text-sm font-semibold">
                 <p>
                    {{$reservation->created_at}}
                 </p>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>