<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>空室カレンダー</title>
    <style>
        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
        }
        .calendar-cell {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }
        .available {
            background-color: #d4edda;
        }
        .reserved {
            background-color: #f8d7da;
        }
        .calendar-header {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>2か月分の空室カレンダー</h1>
    <div id="calendar" class="calendar"></div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // LaravelのAPIから空室カレンダーのデータを取得する
            fetch('/api/room-selection')
                .then(response => response.json())
                .then(data => {
                    createCalendar(data);
                });

            // カレンダーを作成する関数
            function createCalendar(data) {
                const calendarElement = document.getElementById("calendar");
                const daysOfWeek = ['日', '月', '火', '水', '木', '金', '土'];

                // カレンダーのヘッダーを追加
                daysOfWeek.forEach(day => {
                    const headerCell = document.createElement('div');
                    headerCell.classList.add('calendar-cell', 'calendar-header');
                    headerCell.textContent = day;
                    calendarElement.appendChild(headerCell);
                });

                // 部屋ごとの空室カレンダーを表示
                for (const roomNumber in data) {
                    const roomData = data[roomNumber];

                    // 各部屋のカレンダーを作成
                    const roomTitle = document.createElement('div');
                    roomTitle.classList.add('calendar-cell');
                    roomTitle.textContent = "部屋番号: " + roomNumber;
                    calendarElement.appendChild(roomTitle);

                    for (const date in roomData) {
                        const cell = document.createElement('div');
                        cell.classList.add('calendar-cell');
                        
                        // 日付を表示
                        cell.textContent = date;

                        // 空室状況をチェックしてクラスを追加
                        if (roomData[date] === 'available') {
                            cell.classList.add('available');
                            cell.textContent += " - 空室あり";
                        } else {
                            cell.classList.add('reserved');
                            cell.textContent += " - 予約済み";
                        }

                        calendarElement.appendChild(cell);
                    }
                }
            }
        });
    </script>
</body>
</html>
