<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_PE');
        
        for($i = 0; $i < 3; $i++)
        {
            $iduser = DB::table('users')->insertGetId([
            'first_name'=> $faker->firstName,
            'last_name' => $faker->lastName,
            'email'     => $faker->unique()->email,
            'password'  => \Hash::make('123456'),
            'type'      => 'user'
            ]);   
        }
        
        for($i = 0; $i < 3; $i++)
        {    
            $identity = DB::table('entities')->insertGetId([
                'name'=>$faker->company,
                'code'=>Faker::create('fr_FR')->unique()->siren,
                'city'=>$faker->state,
            ]);
            
        }
        
        for($i = 0; $i < 100; $i++)
        {
            $idcustomer = DB::table('customers')->insertGetId([
                'user_id'=>$iduser,
                'dni'=>$faker->unique()->numberBetween($min = 40000000, $max = 80000000),
                'first_name'=>$faker->firstName,
                'last_name'=>$faker->lastName,
                'department_id'=>'2',
                'province_id'=>'5',
                'district_id'=>'100',
                'address'=>$faker->address,
                'phone'=>$faker->phoneNumber,
            ]); 
        }
        
        for($i = 0; $i < 100; $i++)
        {
            DB::table('loans')->insert([
                'customer_id'=>$idcustomer,
                'entity_id'=>$identity,
                'number_loan'=>$faker->unique()->isbn10,
                'days_overdue'=>$faker->numberBetween($min = 100, $max = 1500),
                'balance'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 10000),
                'mora'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 10000),
                'total'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 10000),
                'letter'=>$faker->numberBetween($min = 100, $max = 400),
                'letter_pending'=>$faker->numberBetween($min = 1, $max = 25),
                'fup'=>$faker->dateTimeBetween('-5 years')->format('Y-m-d'),
                'due_date'=>$faker->dateTimeBetween('-5 years', '-1 years')->format('Y-m-d'),
            ]);
        }
    }
}
