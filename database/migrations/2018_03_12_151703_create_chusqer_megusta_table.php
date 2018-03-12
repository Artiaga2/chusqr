<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChusqerMegustaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chusqer_megusta', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('chusqer_id')->unsigned();

            $table->primary(['user_id', 'chusqer_id']);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('chusqer_id')->references('id')->on('chusqers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chusqer_megusta');
    }
}
