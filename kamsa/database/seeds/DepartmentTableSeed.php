<?php

use Illuminate\Database\Seeder;
use App\Department;
use Illuminate\Database\Eloquent\Model;

class DepartmentTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'description'=> 'Lambayeque',
        ]);
        
        DB::table('departments')->insert([
            'description'=> 'Piura',
        ]);
        
        DB::table('departments')->insert([
            'description'=> 'Tumbes',
        ]);
    }
}
