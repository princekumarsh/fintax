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
        Schema::create('gst__ret__fillings', function (Blueprint $table) {
            $table->id();
            $table->string('associate_id')->nullable();
            $table->string('reference_no');
            $table->string('reg_type');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('gstr_3b');
            $table->string('gstr_r1');
            $table->string('gst9');
            $table->string('gst_reconciliation');
            $table->string('accounting_work')->nullable();
            $table->string('roc_return')->nullable();
            $table->string('audit_report')->nullable();
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
        Schema::dropIfExists('gst__ret__fillings');
    }
};
