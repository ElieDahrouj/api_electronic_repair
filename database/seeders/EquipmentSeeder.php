<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = json_decode(file_get_contents('database/data/equipments.json',true));

        foreach ($json as $dataRegistered){
            $equipment = new Equipment();
            $equipment->name = $dataRegistered->name;
            $equipment->description = $dataRegistered->description;
            $equipment->price = $dataRegistered->price;
            $equipment->id_category = $dataRegistered->category_id;
            $equipment->picture = asset("pictures/equipments/".$dataRegistered->picture);
            $equipment->save();
        }
    }
}
