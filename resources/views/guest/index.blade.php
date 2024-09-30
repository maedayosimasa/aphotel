<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>guest一覧表示</title>
</head>
<body>
    <div class="mx-auto px-6">
        <h3>GUEST一覧表示</h3>
        @foreach($posts as $guest)
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">
             <h3 class="p-4 text-lg font-semibold">
                <p >氏  名 : 
                {{$guest->username}}</p>
             </h3>
                <hr class="w-full">
                <p class="mt-4 p-4">住  所 :
                {{$guest->address}}
                </p>
                <p class="mt-4 p-4">電話番号 :
                {{$guest->tel}}
                </p>
            </div>
        @endforeach
    </div>
</body>
</html>