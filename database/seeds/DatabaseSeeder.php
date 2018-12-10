<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(usersTableSeeder::class);
        //$this->call(ProposalsTableSeeder::class);
        //$this->call(ServiceKindsTableSeeder::class);
       // $this->call(ServicesTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        //$this->call(UserTypesTableSeeder::class);
        //$this->call(AddUserTypeTableSeeder::class);
    }
}
