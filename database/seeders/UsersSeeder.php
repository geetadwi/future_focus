<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            [
                'name' => 'Geeta Dwivedi',
                'email' => 'dwivedigeeta09@gmail.com',
                'password' => Hash::make('password')
			],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password')
			],
			[
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password')
			]
        );

        foreach($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
