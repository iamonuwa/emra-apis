<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHasMail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_has_mail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author')->unsigned();
            $table->integer('receipient')->unsigned();
            $table->integer('parent');
            $table->integer('mail')->unsigned();
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
        Schema::dropIfExists('users_has_mail');
    }
}
