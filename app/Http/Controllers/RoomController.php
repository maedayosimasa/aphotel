<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Carbon\Carbon;
use App\Models\Room_type_master;
use App\Models\Reservation;
use App\Models\Reserv_detail;


class RoomController extends Controller
{
//roomテーブルのデーターすべて取得
    public function index() {
        $posts = Room::all();
        return view('room.index', compact('posts'));
    }

    public function create() {
        return view('room.create');
    }
    public function store(Request $request) {
        $post = Room::create([
        'room_type_master_id' => $request->room_type_master_id,
        'room_number' => $request->room_number
        ]);
        $request->session()->flush('message', '保存しました');
        return back()->with('message','保存しました');
    }


    //room_selectへの出力

    public function room_selection(Request $request)
    {
        // 1. 開始日（今日）と終了日（2か月後）の設定
        $startDate = Carbon::today();  // 今日の日付
        $endDate = Carbon::today()->addMonths(2);  // 2か月後の日付
        // dump() で日付を確認
        dump('Start Date:', $startDate);
        dump('End Date:', $endDate);
        // 2. 予約済みの部屋を2か月分取得
        // reservation テーブルの inday（チェックイン日）と outday（チェックアウト日）で予約期間を確認
        $reservedRoomIds = Reservation::whereHas('reservation', function ($query) use ($startDate, $endDate) {
            $query->whereBetween('inday', [$startDate, $endDate])
                ->orWhereBetween('outday', [$startDate, $endDate]);
        })->pluck('room_id');
        // dump() で予約済みの部屋IDを確認
        dump('Reserved Room IDs:', $reservedRoomIds);
    //     // 3. 2か月分の空室を取得（予約済みでない部屋を対象）
    //     $availableRooms = Room::whereNotIn('room_id', $reservedRoomIds)->get();
    //     // dump() で空室の部屋を確認
    //     dump('Available Rooms:', $availableRooms);
    //     // 4. 部屋ごとのカレンダー形式で日付ごとの空室状況を作成
    //     $calendar = [];
    //     foreach ($availableRooms as $room) {
    //         $roomCalendar = [];
    //         for ($date = $startDate->copy(); $date <= $endDate; $date->addDay()) {
    //             // 部屋の該当日付の予約状況を確認
    //             $isRoomAvailableOnDate = !Reservation::where('room_id', $room->room_id)
    //                 ->where('stay_day', $date->format('Y-m-d'))
    //                 ->exists();

    //             // 日付ごとの空室情報をカレンダーに追加
    //             $roomCalendar[$date->format('Y-m-d')] = $isRoomAvailableOnDate ? 'available' : 'reserved';
    //         }
    //         // dump() で部屋ごとのカレンダー情報を確認
    //         dump('Room:', $room->room_number, 'Calendar:', $roomCalendar);
    //         $calendar[$room->room_number] = $roomCalendar;  // 部屋番号をキーとしてカレンダーに追加
    //     }
    //     // 5. JSON形式でカレンダーを返す
    //     return response()->json($calendar);
    }

   
}



