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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('date_of_birth');
            $table->string('phone_number');
            $table->string('email_address');
            $table->integer('province_id');
            $table->integer('city_id');
            $table->text('street_address');
            $table->string('zip_code');
            $table->string('ktp_number');
            $table->integer('position_id');
            $table->integer('bank_id');
            $table->string('bank_account_number');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
