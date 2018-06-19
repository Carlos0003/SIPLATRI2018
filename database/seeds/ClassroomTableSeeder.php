<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Classroom;

class ClassroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classroom')->insert([
        	'id'=>9859602,
        	'name'=>'Jeremias Sprinfield',
        	'user_id'=>'', 	
        	'state'=>'Activo',
        	'usability'=>'Tecnológico', 	
        ]);
    }
}
