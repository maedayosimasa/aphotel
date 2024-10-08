{{-- <!DOCTYPE html>
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

                <!-- Guest 情報 -->
                {{-- <h4 class="p-4 text-lg font-semibold">利用者情報</h4>
                <p>氏名 : {{$reservation->guest->username}}</p>
                <p>住所 : {{$reservation->guest->address}}</p>
                <p>電話番号 : {{$reservation->guest->tel}}</p>
            </div>
        @endforeach
    </div>
</body>
</html> --}}



<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reservation一覧表示</title>
    <style>
        body {
            background: linear-gradient(135deg, #fff7e6, #ffecd1);
            font-family: 'Georgia', serif;
            color: #333;
            text-align: justify;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border: 2px solid gold;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        h3 {
            text-align: center;
            color: #7f5a0a;
            font-size: 2rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px #d4a017;
        }

        .card {
            background: #fff8e1;
            border: 1px solid gold;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            text-indent: 2em; /* 段落のインデント */
        }

        .card h4 {
            font-size: 1.5rem;
            color: #6b4f1d;
            text-shadow: 1px 1px 3px #b08401;
        }

        .card p {
            font-size: 1.2rem;
            color: #3d2f0c;
            text-indent: 2em;
        }

        .card hr {
            border: 0;
            height: 1px;
            background: linear-gradient(to right, gold, transparent);
            margin: 20px 0;
        }

        .card .guest-info {
            margin-top: 20px;
        }

        /* 金色の罫線 */
        .thin-border {
            border-bottom: 1px solid gold;
        }

        /* アニメーションで光沢を追加 */
        @keyframes shine {
            from {
                background-position: -200px;
            }
            to {
                background-position: 200px;
            }
        }

        h3, h4, p {
            position: relative;
            display: inline-block;
            background-image: linear-gradient(45deg, gold, rgba(255, 255, 255, 0.2));
            background-size: 200px;
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            animation: shine 3s infinite linear;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>RESEVATION一覧表示</h3>
        @foreach($posts as $reservation)
            <div class="card">
                <h4>利用者ID : {{$reservation->guest_id}} / PKID : {{$reservation->guest->id ?? 'エラー'}}</h4>
                <hr class="thin-border">
                <p>人数 : {{$reservation->number}}</p><br>
                <p>チェックイン日 : {{$reservation->inday}}</p><br>
                <p>チェックアウト日 : {{$reservation->outday}}</p><br>

                <div class="guest-info">
                    <h4>利用者情報</h4><br>
                    <p>氏名 : {{$reservation->guest->username}}</p><br>
                    <p>住所 : {{$reservation->guest->address}}</p><br>
                    <p>電話番号 : {{$reservation->guest->tel}}</p><br>

                    <h4>予約明細</h4><br>
                    <p>予約ＩＤ  : {{$reservation->rooms->first()->id}}</p><br>
                    <p>部屋ID  : {{$reservation->rooms->first()->pivot->room_id}}</p><br>
                    <p>宿泊日 : {{$reservation->rooms->first()->pivot->stay_day}}</p><br>
                     <p>宿泊料 : {{$reservation->rooms->first()->pivot->stay_price}}</p><br>
                    {{-- <p>ROOMPKID : {{$reservation->rooms->first()->id?? 'エラー'}}</p><br>
                      ROOM {{$reservation->rooms->first()->pivot}} --}}
                    <h4>部屋</h4><br>
                    <p>部屋種別マスター : {{$reservation->rooms->first()->room_type_master_id}}</p><br>
                    <p>部屋番号 : {{$reservation->rooms->first()->room_number}}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
