<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveTraitIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('trait_index');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('trait_index', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trait_id');
            $table->foreign('trait_id')->references('id')->on('traits');
            $table->unsignedBigInteger('shrubby_id');
            $table->foreign('shrubby_id')->references('id')->on('shrubbies');
        });
    }
}
