<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * @var Category
     */
    private $category;

    /**
     * CategoryTableSeeder constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('categories')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $this->category->insert(['name' => 'News']);
        $this->category->insert(['name' => 'Editorial']);
        $this->category->insert(['name' => 'Interview']);
        $this->category->insert(['name' => 'Review']);
        $this->category->insert(['name' => 'News']);
        $this->category->insert(['name' => 'Blog']);

    }
}
