<?php

use Illuminate\Database\Seeder;
use App\Categogy;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category= new Categogy();
        $category->id   = 1;
        $category->name = "Samsung";
        $category->save();

        $category= new Categogy();
        $category->id   = 2;
        $category->name = "Nokia";
        $category->save();
    }
}
