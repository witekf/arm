<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            'name'=>'Zespół Organizacyjny',
            'code'=>'OR'
        ]);

        DB::table('units')->insert([
            'name'=>'Zespół Audytu i Kontroli',
            'code'=>'AK'
        ]);

        DB::table('units')->insert([
            'name'=>'Zespół Finansowy',
            'code'=>'FN'
        ]);

        DB::table('units')->insert([
            'name'=>'Zespół Logistyki i Informatyki',
            'code'=>'LG'
        ]);

        DB::table('units')->insert([
            'name'=>'Referat Informatyki',
            'code'=>'LG-I'
        ]);

        DB::table('units')->insert([
            'name'=>'Referat Administracyjny',
            'code'=>'LG-A'
        ]);
    }
}
