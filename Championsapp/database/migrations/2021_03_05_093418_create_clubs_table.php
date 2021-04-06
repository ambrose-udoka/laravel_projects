<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->bigIncrements('club_id');
            $table->string('club_name');
            $table->datetime('year_established');
            $table->text('club_desc');
            $table->string('city');
            $table->foreignId('country_id')->constrained('countries')->references('country_id');
            $table->string('stadium_name');
            $table->enum('status', ['promoted', 'relegated'])->default('promoted');
            $table->string('club_logo');
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
        Schema::dropIfExists('clubs');
    }
}
