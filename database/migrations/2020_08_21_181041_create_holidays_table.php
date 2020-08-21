<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->string('date_extense');
            $table->date('date');
            $table->string('week_day');
            $table->integer('week_day_index');
            $table->string('mounth');
            $table->integer('mounth_index');
            $table->integer('year');
            $table->string('description');
            $table->string('type');
            $table->string('ibge_code')->unique();;
            $table->string('initials');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('region'); 
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
        Schema::dropIfExists('holidays');
    }
}
