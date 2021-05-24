<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReplacementTutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replacement_tutorials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('author');
            $table->string('company');
            $table->string('image');
            $table->string("difficulty");
            $table->string("necessary_time");
            $table->integer("nb_favorite");
            $table->integer("nb_completed_repair");
            $table->foreignId("id_appliance")->constrained('appliances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('replacement_tutorials');
    }
}
