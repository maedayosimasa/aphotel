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
            display: flex; /* 横並び */
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .form-group label {
            width: 150px; /* ラベルの幅を固定 */
            text-align: right; /* ラベルのテキストを右揃え */
        }

        .form-group input[type="text"],
        .form-group input[type="date"] {
            flex: 1; /* 入力フィールドを残りのスペースに広げる */
            padding: 10px;
            background-color: white;
            border: 2px solid gold;
            border-radius: 5px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease, background-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="date"]:focus {
            box-shadow: 0 0 10px gold; /* フォーカス時に外側に光る */
            outline: none;
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
            margin: 20px auto 0;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #ffcc00, #d4a017);
        }

        input[type="submit"]:active {
            transform: scale(0.98);
        }

        /* モバイル対応 */
        @media (max-width: 600px) {
            .form-group {
                flex-direction: column; /* モバイルでは縦に並ぶ */
                align-items: stretch;
            }

            .form-group label {
                text-align: left; /* モバイルでは左揃え */
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const inputs = document.querySelectorAll('input[type="text"], input[type="date"]');
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
     <script>
        document.addEventListener('DOMContentLoaded', function () {
            // guest_id の input フィールドをクリックしたときにページを移動
            document.getElementById('guest_id').addEventListener('click', function () {
                window.location.href = "{{ route('guest.create') }}";
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h3>予約管理表</h3>
        <br>
        <div class="card">
            <h3>部屋詳細</h3>
            <br>
            <h3>空室カレンダー</h3>
        </div>
        <h3>予約入力</h3>
        <form method="post" action="{{route('Reservation.store_manag')}}">
            @csrf
            <div class="card">
                <div class="form-group">
                    <label for="reservation_id">予 約 ID：</label>
                    <input type="text" name="reservation_id">
                </div>
               
                <div class="form-group">
                    <label for="guest_id">利用者ID：</label>
                    <input type="text" name="guest_id" id="guest_id" placeholder="クリックでログイン画面に移動します。" value="{{old('guest_id')}}" readonly >
                 </div>
                <div class="form-group">
                    <label for="number">人数：</label>
                    <input type="text" name="number">
                </div>
                 <div class="form-group">
                    <label for="room_id">部  屋 ID：</label>
                    <input type="text" name="room_id">
                </div>
                <div class="form-group">
                    <label for="inday">チェックイン日付：</label>
                    <input type="date" name="inday">
                </div>
                <div class="form-group">
                    <label for="outday">チェックアウト日付：</label>
                    <input type="date" name="outday">
                </div>
         
  
                <div class="form-group">
                    <label for="stay_day">宿 泊 日：</label>
                    <input type="date" name="stay_day">
                </div>
                <div class="form-group">
                    <label for="stay_price">宿 泊 料：</label>
                    <input type="text" name="stay_price">
                </div>
            </div>
            <div class="card">
                    <p>変更</p>
                    <p>キャンセル</p>
            </div>
            <input type="submit" value="送信">
        </form>
       
    </div>
</body>
</html>
