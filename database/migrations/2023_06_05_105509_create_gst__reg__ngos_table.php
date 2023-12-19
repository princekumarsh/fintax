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
        Schema::create('gst__reg__ngos', function (Blueprint $table) {
            $table->id();
            $table->string('associate_id')->nullable();
            $table->string('reference_no');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('ngo_pan_card');
            $table->string('certificate');
            $table->string('moa');
            $table->string('autho_pan_card');
            $table->string('autho_aadhar_card');
            $table->string('autho_photo');
            $table->string('autho_letter');
            $table->string('autho_bap');
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
        Schema::dropIfExists('gst__reg__ngos');
    }
};
