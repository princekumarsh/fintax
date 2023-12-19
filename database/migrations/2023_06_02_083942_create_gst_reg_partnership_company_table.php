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
        Schema::create('gst_reg_partnership_company', function (Blueprint $table) {
            $table->id();
            $table->string('associate_id')->nullable();
            $table->string('reference_no');
            $table->string('company_gst_reg');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('com_pan_card')->nullable();
            $table->string('com_incorCompany')->nullable();
            $table->string('company_moa')->nullable();
            $table->string('director_pan_card')->nullable();
            $table->string('director_aadhar_card')->nullable();
             $table->string('director_photo')->nullable();
            $table->string('autho_aadhar_card')->nullable();
            $table->string('autho_photo')->nullable();
            $table->string('auto_letter')->nullable();
            $table->string('auto_bap')->nullable();  //BUSINESS ADDRESS PROFF
            $table->string('autho_pan_card')->nullable();
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
        Schema::dropIfExists('gst_reg_partnership_company');
    }
};
