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
         Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // match with customers.id
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('profession');
            $table->string('family_status');
            $table->string('family_location');
            $table->unsignedInteger('total_siblings');
            $table->unsignedInteger('annual_income');

            $table->foreign('user_id')
                ->references('id')
                ->on('customers')
                ->onDelete('cascade'); // optional
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
        Schema::dropIfExists('families');
    }
};
