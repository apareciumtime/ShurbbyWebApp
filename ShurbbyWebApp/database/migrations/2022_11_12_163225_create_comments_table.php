<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            //this will auto generate commentable_id & commentable_type
            $table->morphs('commentable');
            // // id of shrubby or clumppy that this comment in
            // $table->unsignedBigInteger('commentable_id');
            // // shrubby's or clumppy's comment
            // $table->string('commentable_type');

            // order of this comment in that shrubby or clumppy
            $table->integer('comment_id');
            //owner of this comment
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            // for reply
            $table->integer('parent')->nullable();
            // content
            $table->mediumText('content')->nullable();
            // like count
            $table->integer('like');
            // credits
            $table->integer('credit');
            // accepted or not
            $table->boolean('accept')->nullable();
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
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });
        Schema::dropIfExists('comments');
    }
}
