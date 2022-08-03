<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'canela',
            'email' => 'canela@gmail.com',
            'password' => bcrypt('canela123')
        ]);

        User::factory(49)->create();
    }
}
