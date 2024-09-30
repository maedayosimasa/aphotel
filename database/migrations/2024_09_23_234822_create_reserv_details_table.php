<?php

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
        Schema::create('reserv_details', function (Blueprint $table) {
            $table->id();
            $table->integer('reservation_id');
            $table->integer('roomid');
            $table->date('stay_day');
            $table->integer('stay_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserv_details');
    }
};
