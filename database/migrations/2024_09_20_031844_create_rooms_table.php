<?php

use App\Models\Room_type_master;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {

            $table->id();
            //FK情報
            $table->foreignId('room_type_master_id');
            
            $table->integer('room_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       // Schema::dropIfExists('rooms');
       Schema::table('room_type_masters',function (Blueprint $table){
        $table->dropColumn('room_type_masuter_id');
       });
    }
};