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
        Schema::create('com__reg__trademarks', function (Blueprint $table) {
            $table->id();
            $table->string('associate_id')->nullable();
            $table->string('reference_no');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('indi_pan_card');
            $table->string('indi_aadhar_card');
            $table->string('indi_photo');
            $table->string('gst_certi');
            $table->string('trade_mark_Name');
            $table->string('affidavit');
            $table->string('payment_type');
            $table->string('pay_screenshot');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('com__reg__trademarks');
    }
};
