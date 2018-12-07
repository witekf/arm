<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'name'=>'Superadmin'
        ]);
        DB::table('user_types')->insert([
            'name'=>'Admin'
        ]);
        DB::table('user_types')->insert([
            'name'=>'Dyrektor'
        ]);
        DB::table('user_types')->insert([
            'name'=>'Kierownik'
        ]);
        DB::table('user_types')->insert([
            'name'=>'IOD'
        ]);
        DB::table('user_types')->insert([
            'name'=>'Pracownik'
        ]);
    }
}
