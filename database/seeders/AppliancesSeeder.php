<?php

namespace Database\Seeders;

use App\Models\Appliance;
use Illuminate\Database\Seeder;

class AppliancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = json_decode(file_get_contents('database/data/appliances.json',true));

        foreach ($json as $dataRegistered){
            $appliance = new Appliance();
            $appliance->name = $dataRegistered->name;
            $appliance->description = $dataRegistered->description;
            $appliance->id_category = $dataRegistered->id_category;
            $appliance->image = asset("storage/pictures/appliances/".$dataRegistered->image);
            $appliance->save();
        }
    }
}
