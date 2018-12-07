<?php

use Illuminate\Database\Seeder;

class AddUserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->update([
            'user_type_id'=>1,
        ]);
    }
}
