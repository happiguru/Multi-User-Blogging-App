<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $html = new Category();
        $html->name ='HTML';
        $html->slug ='html';
        $html->save();

        $css = new Category();
        $css->name ='CSS';
        $css->slug ='css';
        $css->save();

        $php = new Category();
        $php->name ='PHP';
        $php->slug ='php';
        $php->save();

        $laravel = new Category();
        $laravel->name ='Laravel';
        $laravel->slug ='laravel';
        $laravel->save();
        
        $ror = new Category();
        $ror->name ='Ruby on Rails';
        $ror->slug ='ruby-on-rails';
        $ror->save();

        
    }
}
