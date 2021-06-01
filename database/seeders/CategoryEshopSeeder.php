<?php

namespace Database\Seeders;

use App\Models\CategoryEshop;
use Illuminate\Database\Seeder;

class CategoryEshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = json_decode(file_get_contents('database/data/category_eshop.json',true));

        foreach ($json as $dataRegistered){
            $categoryEshop = new CategoryEshop();
            $categoryEshop->name = $dataRegistered->name;
            $categoryEshop->picture = asset("pictures/categories_eshop/".$dataRegistered->picture);
            $categoryEshop->save();
        }
    }
}
