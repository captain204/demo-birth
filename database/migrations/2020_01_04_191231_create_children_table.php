<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_birth');
            $table->string('place_birth');
            $table->string('child_firstname');
            $table->string('child_middlename');
            $table->string('child_lastname');
            $table->integer('child_weight');
            $table->string('eye_color');
            $table->string('sex');
            $table->string('f_firstname')->nullable();
            $table->string('f_surname')->nullable();
            $table->string('f_national_id')->nullable();
            $table->string('m_maiden')->nullable();
            $table->string('m_firstname')->nullable();
            $table->string('m_lastname')->nullable();
            $table->string('m_national_id')->nullable();
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('children');
    }
}
