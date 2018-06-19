<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'document'=>10256535,
        	'fullname'=>'Jeremias Sprinfield',
        	'email'=>'jeremias@misena.edu.co',       	
        	'password'=>bcrypt('123456'),
        	'phonenumber'=>123456,
        	'municipality'=>'Manizales',
        	'gender'=>'Masculino',
        	'role'=>'Instructor',  	
        	'contract'=>'PrestacionServicios', 	
        	'state'=>'Activo', 	
        ]);
    }
}
