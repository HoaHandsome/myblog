<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Rule;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*         Category::create([ 'name'=> 'công việc']);
        Category::create([ 'name'=> 'doi song']);
        Category::create([ 'name'=> 'tam su']);
        Category::create([ 'name'=> 'tuoi tre']);
        Category::create([ 'name'=> 'tinh yeu']); */
        Rule::create([ 'name'=> 'admin']);
        Rule::create([ 'name'=> 'user']);
    }
}
