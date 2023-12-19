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
        Schema::create('associated__regs', function (Blueprint $table) {
            $table->id();

            // $table->string('reference_no');
            $table->string('associate_id')->unique();
            $table->string('name');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->string('pan_card');
            $table->string('aadhar_card');
            $table->string('photo');
            $table->string('password');
            $table->string('address');
            $table->string('pay_screenshot');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associated__regs');
    }
};
