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
        Schema::create('resrv_details', function (Blueprint $table) {
            $table->id();
            $table->integer('reserv_detail');
            $table->integer('reservid');
            $table->integer('roomid');
            $table->date('stay_day');
            $table->integer('stay_praice');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resrv_details');
    }
};
