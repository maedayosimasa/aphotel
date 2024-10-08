<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ゲスト入力</title>
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
        }

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

        .form-group input[type="text"],
        .form-group input[type="tel"] {
            flex: 1; /* 入力フィールドを残りのスペースに広げる */
            padding: 10px;
            background-color: white;
            border: 2px solid gold;
            border-radius: 5px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease, background-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="tel"]:focus {
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
            margin: 20px auto 0; /* ボタンの上マージンを20px、下は0に設定 */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #ffcc00, #d4a017);
        }

        /* モバイル対応 */
        @media (max-width: 600px) {
            .form-group {
                flex-direction: column; /* モバイルでは縦に並ぶ */
            }

            .form-group label {
                width: auto; /* ラベルの幅を自動調整 */
                text-align: left; /* 左揃えに変更 */
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const inputs = document.querySelectorAll('input[type="text"], input[type="tel"]');
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
                {{ session('message') }}
            </div>
        @endif
        <form method="post" action="{{ route('guest.store') }}">
            @csrf
            <h3>利用者入力フォーム</h3>
            <div class="card">
                <div class="form-group">
                    <label for="username">氏名：</label>
                    <input type="text" name="username" id="username" placeholder="氏名を入力してください">
                </div>
                <div class="form-group">
                    <label for="address">住所：</label>
                    <input type="text" name="address" id="address" placeholder="住所を入力してください">
                </div>
                <div class="form-group">
                    <label for="tel">電話番号：</label>
                    <input type="tel" name="tel" id="tel" placeholder="電話番号を入力してください">
                </div>
                <input type="submit" value="送信"> 
            </div>
        </form>
    </div>
</body>
</html>
