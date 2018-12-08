<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name'=>'dostęp do imiennej skrzynki email',
            'key'=>TRUE,
            'service_kind_id'=>1
        ]);
        DB::table('services')->insert([
            'name'=>'dostęp do drukarek korytarzowych',
            'key'=>FALSE,
            'service_kind_id'=>1
        ]);
        DB::table('services')->insert([
            'name'=>'dostęp do SL2014',
            'key'=>FALSE,
            'service_kind_id'=>4
        ]);
    }
}
