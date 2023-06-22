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
        Schema::create('schooltbl', function (Blueprint $table) {
            $table->id();
            $table->string('school');
            $table->string('level');
            $table->unsignedBigInteger('district_id');
            $table->unique(['school', 'level']);
            $table->foreign('district_id')->references('id')->on('disticttbl')->onUpdate('cascade');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schooltbl');
        Schema::table('schooltbl', function (Blueprint $table) {
            $table->dropUnique(['school', 'level']);
        });
    }
};
