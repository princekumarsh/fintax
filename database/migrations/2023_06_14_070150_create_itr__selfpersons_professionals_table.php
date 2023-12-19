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
        Schema::create('itr__selfpersons_professionals', function (Blueprint $table) {
            $table->id();
            $table->string('associate_id')->nullable();
            $table->string('reference_no');
            $table->string('itr');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('pan_card');
            $table->string('aadhar_card');
            $table->string('brp'); //business registration proof
            $table->string('aybs'); //assement year bank statement
            $table->string('ayr');  //assemnt year return
            $table->string('aybto'); //assement year business turn over
            $table->string('investment_proof');
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
        Schema::dropIfExists('itr__selfpersons_professionals');
    }
};
