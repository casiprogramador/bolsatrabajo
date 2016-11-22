<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$this->call(AdminsTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(SectorsTableSeeder::class);
        $this->call(LanguageTableSeeder::class);
			
    }
}
