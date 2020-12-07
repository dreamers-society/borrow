<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'test',
            'last_name' => 'user',
            'email' => 'test@mail.com',
            'password' => bcrypt('123'),
        ]);
    }
}
