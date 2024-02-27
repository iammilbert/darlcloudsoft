<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('courseId');
            $table->foreign('courseId')->references('id')->on('course')->onDelete('cascade');
            $table->bigInteger('studentId')->unsigned()->index()->nullable(); 
            $table->foreign('studentId')->references('id')->on('users')->onDelete('cascade');
            $table->string('categories');
            $table->string('session');
            $table->string('additionalInfo');
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
        Schema::dropIfExists('order');
    }
}
