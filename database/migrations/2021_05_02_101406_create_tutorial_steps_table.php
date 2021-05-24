<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorialStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorial_steps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("step_number");
            $table->text("description");
            $table->foreignId("id_replacement_tutorial")->constrained('replacement_tutorials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutorial_steps');
    }
}
