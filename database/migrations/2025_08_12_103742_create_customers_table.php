<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile');
            $table->string('gmail')->unique();
            $table->string('caste');
            $table->string('hobbies');
            $table->unsignedInteger('age');
            $table->string('religion');
            $table->string('city');
            $table->decimal('height');
            $table->decimal('weight');
            $table->string('marital_status');
            $table->text('family_details');
            $table->text('parents_details');
            $table->string('family_location');
            $table->string('family_status');
            $table->string('profession');
            $table->string('annual_income');
            $table->string('qualification');
            $table->string('college_name');
            $table->string('image');
            $table->enum('status', ['pending', 'done'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
