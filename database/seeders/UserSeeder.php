<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id');
        for ($i = 1; $i <= 10; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('users')->insert([
                'role_id' => $faker->numberBetween(1, 2),
                'name' =>  $faker->name,
                'username' =>  $faker->username,
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('password'),
            ]);
        }
    }
}
