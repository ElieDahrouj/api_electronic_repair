<?php

namespace Database\Seeders;

use App\Models\TutorialStep;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CategorySeeder::class,
            AppliancesSeeder::class,
            ReplacementTutorialSeeder::class,
            TutorialStepsSeeder::class,
            TutorialPicturesSeeder::class,
            CategoryEshopSeeder::class,
            EquipmentSeeder::class
        ]);
    }
}
