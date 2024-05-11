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
        Schema::create('timeinouts', function (Blueprint $table) {
            $table->id();
            $table->string('timeIn_Morning');
            $table->string('timeOut_Morning');
            $table->string('timeIn_Afternoon');
            $table->string('timeOut_Afternoon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timeinouts');
    }
};
