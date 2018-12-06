<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'login'=>'sysuser',
            'name'=>'Sys',
            'surname'=>'User',
            'password'=>bcrypt('sysuser')
        ]);
        DB::table('users')->insert([
            'login'=>'wfendrych',
            'name'=>'Witold',
            'surname'=>'Fendrych',
            'password'=>bcrypt('test')
        ]);


    }
}
