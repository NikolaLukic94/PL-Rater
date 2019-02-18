<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ticket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->unsignedInteger('type_id');
            $table->unsignedInteger('category_id');
            $table->string('priority');

            $table->foreign('type_id')->references('id')->on('ticket_types');
            $table->foreign('category_id')->references('id')->on('ticket_categories');

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
        Schema::dropIfExists('tickets');

    }
}
