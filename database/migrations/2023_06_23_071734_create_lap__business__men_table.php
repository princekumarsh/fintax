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
        Schema::create('lap__business__men', function (Blueprint $table) {
            $table->id();
            $table->string('associate_id')->nullable();
            $table->string('reference_no');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('kyc_pan_card');
            $table->string('kyc_aadhar_card');
            $table->string('kyc_photo');
            $table->string('brp');
            $table->string('bank_statement');
            $table->string('itr');
            $table->string('gst_reg');
            $table->string('rap');
            $table->string('ca_pan_card');
            $table->string('ca_aadhar_card');
            $table->string('ca_photo');
            $table->string('property_paper');
            $table->string('ats');
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
        Schema::dropIfExists('lap__business__men');
    }
};
