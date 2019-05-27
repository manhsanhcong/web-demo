<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category;
        $category->name = 'Chưa được phân loại';
        $category->save();

        $category = new Category;
        $category->name = 'Tin khuyến mại';
        $category->save();

        $category = new Category;
        $category->name = 'Tin tức tổng hợp';
        $category->save();


        $category = new Category;
        $category->name = 'Tư vấn kiến thức';
        $category->save();
    }
}
