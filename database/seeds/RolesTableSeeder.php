<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new Role();
        $admin->name ='admin';
        $admin->save();

        $author = new Role();
        $author->name ='author';
        $author->save();

        $subscriber = new Role();
        $subscriber->name ='subscriber';
        $subscriber->save();
    }
}
