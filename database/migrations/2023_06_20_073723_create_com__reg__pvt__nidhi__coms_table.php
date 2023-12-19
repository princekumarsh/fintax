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
        Schema::create('com__reg__pvt__nidhi__coms', function (Blueprint $table) {
            $table->id();
            $table->string('associate_id')->nullable();
            $table->string('reference_no');
            $table->string('com_type');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('kyc_pan_card');
            $table->string('kyc_aadhar_card');
            $table->string('kyc_photo');
            $table->string('kyc_bank_statement');
            $table->string('bap');
            $table->string('signature');
            $table->string('bank_details');
            $table->string('memeber7_pan_card')->nullable();
            $table->string('memeber7_aadhar_card')->nullable();
            $table->string('memeber7_photo')->nullable();
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
        Schema::dropIfExists('com__reg__pvt__nidhi__coms');
    }
};
