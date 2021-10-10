<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('image');
            $table->string('avatar');
            $table->string('age');
            $table->date('birth_day');
            $table->string('gender');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('national');
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('favourite')->nullable();
            $table->string('description')->nullable();
            $table->string('note')->nullable();
            $table->string('social_network')->nullable();
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
        Schema::dropIfExists('providers');
    }
}
