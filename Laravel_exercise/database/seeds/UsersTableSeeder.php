<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'id' => 1,
            'name' => 'Nigel',
            'email' => 'nigel@bcchildrens.com',
            'password' => Hash::make('password1'),
            'created_at' => now()
        ]);

        User::insert([
            'id' => 2,
            'name' => 'Malinda',
            'email' => 'malinda@bcchildrens.com',
            'password' => Hash::make('password2'),
            'created_at' => now()
        ]);

        User::insert([
            'id' => 3,
            'name' => 'Rachel',
            'email' => 'rachel@bcchildrens.com',
            'password' => Hash::make('password3'),
            'created_at' => now()
        ]);

        User::insert([
            'id' => 7,
            'name' => 'Liam',
            'email' => 'liambhetherington@gmail.com',
            'password' => Hash::make('myPassword'),
            'created_at' => now()
        ]);
    }
}
