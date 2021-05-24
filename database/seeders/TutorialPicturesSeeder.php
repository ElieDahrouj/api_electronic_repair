<?php

namespace Database\Seeders;

use App\Models\TutorialPicture;
use Illuminate\Database\Seeder;

class TutorialPicturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = json_decode(file_get_contents('database/data/tutorial_pictures.json',true));

        foreach ($json as $dataRegistered){
            $tutorialPicture = new TutorialPicture();
            $tutorialPicture->path = storage_path("pictures/tutorial_pictures".$dataRegistered->path);
            $tutorialPicture->id_tutorial_step = $dataRegistered->id_tutorial_step;
            $tutorialPicture->save();
        }
    }
}
