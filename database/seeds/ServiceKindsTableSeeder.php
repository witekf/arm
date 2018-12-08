<?php

use Illuminate\Database\Seeder;

class ServiceKindsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_kinds')->insert([
            'name'=>'usługi podstawowe'
        ]);
        DB::table('service_kinds')->insert([
            'name'=>'aplikacje wewnętrzne - podstawowe'
        ]);
        DB::table('service_kinds')->insert([
            'name'=>'aplikacje wewnętrzne - fk'
        ]);
        DB::table('service_kinds')->insert([
            'name'=>'aplikacje zewnętrzne'
        ]);
        DB::table('service_kinds')->insert([
            'name'=>'aplikacje zewnętrzne - EFS RPO'
        ]);
        DB::table('service_kinds')->insert([
            'name'=>'aplikacje zewnętrzne - EFS POWER'
        ]);
        DB::table('service_kinds')->insert([
            'name'=>'aplikacje zewnętrzne - EFS POKL/ZPORR/SPO'
        ]);
        DB::table('service_kinds')->insert([
            'name'=>'serwisy www - CMS'
        ]);
        DB::table('service_kinds')->insert([
            'name'=>'usługi inne/archiwalne'
        ]);
        DB::table('service_kinds')->insert([
            'name'=>'usługi dla ASI'
        ]);
    }
}
