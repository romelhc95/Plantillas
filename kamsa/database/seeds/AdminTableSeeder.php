<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Database\Eloquent\Model;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'first_name'=> 'Romel',
            'last_name' => 'Huaman',
            'email'     => 'romel95@gmail.com',
            'password'  => bcrypt('secret'),
        ]);
    }
}
