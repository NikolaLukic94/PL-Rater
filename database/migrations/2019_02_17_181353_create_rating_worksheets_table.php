<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingWorksheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_worksheets', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('file_id');
            $table->foreign('file_id')->references('id')->on('files');

            $table->unsignedInteger('premium_id');
            $table->foreign('premium_id')->references('id')->on('premiums');

            $table->unsignedInteger('rater_id');
            $table->foreign('rater_id')->references('id')->on('raters');    
                    
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
        Schema::dropIfExists('rating_worksheets');
    }
}
