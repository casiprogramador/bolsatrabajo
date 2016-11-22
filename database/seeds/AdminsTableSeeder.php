<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $admins = array(
            array( 'name' => 'Administrador',
				'email'=>'admin',
				'password'=>bcrypt('adminpass')),
        );
        DB::table('admins')->insert($admins);
    }
}
