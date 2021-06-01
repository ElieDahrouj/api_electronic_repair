<?php

namespace Database\Seeders;

use App\Models\Category;
use JD\Cloudder\Facades\Cloudder;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = json_decode(file_get_contents('database/data/categories.json',true));

        foreach ($json as $dataRegistered){
            $category = new Category();
            $category->name = $dataRegistered->name;
            $category->picture = asset("pictures/categories/".$dataRegistered->picture);
            $category->save();
        }
    }
}
