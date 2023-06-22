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
        Schema::create('applicantstbl', function (Blueprint $table) {
            $table->id();
            $table->string('typeofappointment');
            $table->string('itemnumber')->nullable();     
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('position');
            $table->string('department');
            $table->string('gender');
            $table->date('birthdate');
            $table->string('tinnumber');
            $table->date('DOA');
            $table->date('DLP');
            $table->string('eligibility');
            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schooltbl')->onUpdate('cascade');
            $table->string('status');
            $table->timestamps();         
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicantstbl');
    }
};
