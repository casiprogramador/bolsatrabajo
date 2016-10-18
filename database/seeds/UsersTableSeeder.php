<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $users = array(
            array( 'name' => 'Administrador',
				'email'=>'admin',
				'rol'=>'admin',
				'password'=>bcrypt('adminpass')),
        );
        DB::table('users')->insert($users);
    }
}
