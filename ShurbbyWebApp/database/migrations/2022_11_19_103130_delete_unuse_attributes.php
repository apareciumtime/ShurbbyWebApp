<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteUnuseAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn(['parent']);
        });
        Schema::table('movements', function (Blueprint $table) {
            $table->dropColumn(['share']);
        });
        Schema::table('shrubbies', function (Blueprint $table) {
            $table->dropColumn(['share']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->integer('parent')->nullable();
        });
        Schema::table('movements', function (Blueprint $table) {
            $table->integer('share')->nullable();
        });
        Schema::table('shrubbies', function (Blueprint $table) {
            $table->integer('share')->nullable();
        });
    }
}
