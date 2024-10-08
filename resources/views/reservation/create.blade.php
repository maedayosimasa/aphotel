    {{-- <!DOCTYPE html>
    <html lang="jp">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>reservation入力</title>
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
         @if (session('message'))
        <div class="text-red-600 font-bold">
            {{session('message')}}
        </div>  
        @endif
        <form method="post" action="{{route('Reservation.store')}}">
            @csrf
            <h3>予約フォーム</h3><br>
            <div class="card">
            <h3>部屋明細</h3><br>
            </div>
            <div class="card">
            <h3>空き室カレンダー</h3><br>
            </div>
            <h3>予約入力</h3><br>
            <div class="card">
             <div>
                <label for="guest_id">利用者ID：</label>
                <input type="text" name="guest_id">
            </div>
            <div>
                <label for="number">人数：</label>
                <input type="text" name="number">
            </div>
            <div>
                <label for="room_number">部屋番号 :</label>
                <input type="text" name="room_number">
            </div>
            <div>
                <label for="inday">チェックイン日付：</label>
                <input type="text" name="inday">
            </div>
            <div>
                <label for="outday">チェックアウト日付：</label>
                <input type="text" name="outday">
            </div>
            <div>
                <label for="stay_price">宿泊料 :</label>
                <input type="text" name="stay_price">
            </div>
            <div>
                <p>変更</p><br>
                <p>キャンセル</p>
            </div>
            <input type="submit" value="送信"> 
        </div>
        </form> 
    </div>

    </body>
    </html> --}}

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reservation入力</title>
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

        /* フォームのレイアウト */
.form-group {
    display: flex; /* フレックスボックスで横並びに */
    align-items: center; /* ラベルと入力を垂直方向に中央揃え */
    gap: 10px;
    margin-bottom: 15px;
}

.form-group label {
    width: 200px; /* ラベルの固定幅 */
    text-align: right; /* ラベルのテキストを右揃え */
    padding-right: 10px; /* ラベルと入力の間にスペース */
}

.form-group input[type="text"] {
    flex: 1; /* 入力フィールドを残りのスペースに広げる */
    padding: 10px;
    background-color: white;
    border: 2px solid gold;
    border-radius: 5px;
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease, background-color 0.3s ease;
}


        /* 入力フィールドを白抜きにする */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            background-color: white; /* 白抜きの背景色 */
            border: 2px solid gold; /* 金色のボーダー */
            border-radius: 5px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1); /* 内側に影をつける */
            transition: box-shadow 0.3s ease, background-color 0.3s ease; /* ホバー時にアニメーション */
        }

        input[type="text"]:focus {
            box-shadow: 0 0 10px gold; /* フォーカス時に外側に光る */
            outline: none;
            background-color: #fff; /* フォーカス時も白いまま */
        }

        /* 送信ボタン */
        input[type="submit"] {
            background: linear-gradient(135deg, #d4a017, #ffcc00);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background 0.3s ease;
            display: block;
            margin: 20px auto 0; /* ボタンの上マージンを20px、下は0に設定 */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #ffcc00, #d4a017);
        }

        /* ボタンのアニメーション */
        input[type="submit"]:active {
            transform: scale(0.98);
        }

        /* モバイル対応 */
        @media (max-width: 600px) {
            .form-group {
                grid-template-columns: 1fr; /* モバイルでは縦に並ぶ */
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const inputs = document.querySelectorAll('input[type="text"]');
            inputs.forEach(input => {
                input.addEventListener('focus', function () {
                    this.style.boxShadow = "0 0 10px gold";
                });
                input.addEventListener('blur', function () {
                    this.style.boxShadow = "inset 0 2px 4px rgba(0, 0, 0, 0.1)";
                });
            });
        });
    </script>
</head>
<body>

<div class="container">
    @if (session('message'))
    <div class="text-red-600 font-bold">
        {{session('message')}}
    </div class="container">  
    @endif
    <form method="post" action="{{route('Reservation.store')}}">
        @csrf
        <h3>予約フォーム</h3>
        <div class="card">
            <div class="form-group">
                <label for="guest_id">利用者ID：</label>
                <input type="text" name="guest_id">
            </div>
            <div class="form-group">
                <label for="number">人数：</label>
                <input type="text" name="number">
            </div>
            <div class="form-group">
                <label for="inday">チェックイン日付：</label>
                <input type="text" name="inday">
            </div>
            <div class="form-group">
                <label for="outday">チェックアウト日付：</label>
                <input type="text" name="outday">

            </div>
            <input type="submit" value="送信"> 
        </div>
    </form> 
</div>

</body>
</html>
