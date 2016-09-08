<?php

use Illuminate\Database\Seeder;
use App\Province;
use Illuminate\Database\Eloquent\Model;
class ProvinceTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            'description'=> 'Chiclayo',
            'department_id'=> '1',
        ]);
        
        DB::table('provinces')->insert([
            'description'=> 'Ferreñafe',
            'department_id'=> '1',
        ]);
        
        DB::table('provinces')->insert([
            'description'=> 'Lambayeque',
            'department_id'=> '1',
        ]);
        
        DB::table('provinces')->insert([
            'description'=> 'Ayabaca',
            'department_id'=> '2',
        ]);
        
        DB::table('provinces')->insert([
            'description'=> 'Huancabamba',
            'department_id'=> '2',
        ]);
        
        DB::table('provinces')->insert([
            'description'=> 'Morropón',
            'department_id'=> '2',
        ]);
        
        DB::table('provinces')->insert([
            'description'=> 'Paita',
            'department_id'=> '2',
        ]);
        
        DB::table('provinces')->insert([
            'description'=> 'Piura',
            'department_id'=> '2',
        ]);
        
        DB::table('provinces')->insert([
            'description'=> 'Sechura',
            'department_id'=> '2',
        ]);
        
        DB::table('provinces')->insert([
            'description'=> 'Sullana',
            'department_id'=> '2',
        ]);
        
        DB::table('provinces')->insert([
            'description'=> 'Talara',
            'department_id'=> '2',
        ]);
        
        DB::table('provinces')->insert([
            'description'=> 'Contralmirante Villar',
            'department_id'=> '3',
        ]);
        
        DB::table('provinces')->insert([
            'description'=> 'Tumbes',
            'department_id'=> '3',
        ]);
        
        DB::table('provinces')->insert([
            'description'=> 'Zarumilla',
            'department_id'=> '3',
        ]);
    }
}
