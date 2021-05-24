<?php

namespace Database\Seeders;

use App\Models\TutorialStep;
use Illuminate\Database\Seeder;

class TutorialStepsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = json_decode(file_get_contents('database/data/tutorial_steps.json',true));

        foreach ($json as $dataRegistered){
            $tutorialStep = new TutorialStep();
            $tutorialStep->step_number = $dataRegistered->step_number;
            $tutorialStep->description = $dataRegistered->description;
            $tutorialStep->id_replacement_tutorial = $dataRegistered->id_replacement_tutorial;
            $tutorialStep->save();
        }
    }
}
