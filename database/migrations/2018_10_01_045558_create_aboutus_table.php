<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutus', function (Blueprint $table) {
            $table->increments('id') ->unsigned();
            $table->string('aboutus_title');
            $table->longText('aboutus_detail');
            $table->string('message_title');
            $table->longText('message_detail');
            $table->string('mission_title');
            $table->longText('mission_detail');
            $table->string('vision_title');
            $table->longText('vision_detail');
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
        Schema::dropIfExists('aboutus');
    }
}
