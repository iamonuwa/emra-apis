<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailHasCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_has_comment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author')->unsigned();
            $table->integer('receipient')->unsigned();
            $table->integer('mail')->unsigned();
            $table->longText('comment');
            $table->enum('status', ['public', 'private'])->default('public');
            $table->foreign('author')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('receipient')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('mail')->references('id')->on('mails')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('mail_has_comment');
    }
}
