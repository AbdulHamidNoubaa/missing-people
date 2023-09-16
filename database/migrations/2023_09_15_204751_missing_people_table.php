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
        Schema::create('missing_people', function (Blueprint $table) {
            $table->id();
            $table->string('first_name_miss');
            $table->string('last_name_miss');
            $table->date('birth_date');
            $table->date('disappearance_date');
            $table->string('city_miss');
            $table->string('address_street_miss');
            $table->string('phone_number_miss');
            $table->string('gender');
            $table->text('clothing');
            $table->text('distinctive_features');
            $table->text('additional_info');
            $table->string('image')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('city');
            $table->string('phone_number');
            $table->string('whtas_phone_number');
            $table->string('rrmp');
            $table->string('email');
            $table->string('address_street');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
