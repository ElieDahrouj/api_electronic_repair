<?php

namespace Database\Seeders;

use App\Models\ReplacementTutorial;
use Illuminate\Database\Seeder;

class ReplacementTutorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = json_decode(file_get_contents('database/data/replacement_tutorial.json',true));

        foreach ($json as $dataRegistered){
            $replacementTutorial = new ReplacementTutorial();
            $replacementTutorial->name = $dataRegistered->name;
            $replacementTutorial->author = $dataRegistered->author;
            $replacementTutorial->image = asset("storage/pictures/replacements_tutorials/".$dataRegistered->image);
            $replacementTutorial->difficulty = $dataRegistered->difficulty;
            $replacementTutorial->company = $dataRegistered->company;
            $replacementTutorial->necessary_time = $dataRegistered->necessary_time;
            $replacementTutorial->nb_favorite = $dataRegistered->nb_favorite;
            $replacementTutorial->nb_completed_repair = $dataRegistered->nb_completed_repair;
            $replacementTutorial->id_appliance = $dataRegistered->id_appliance;
            $replacementTutorial->save();
        }
    }
}
