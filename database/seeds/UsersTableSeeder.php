<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['nama'=>'Asep', 'email'=>'sanjayaasep77@gmail.com', 'password'=>bcrypt('ayey332211'),]);
    }
}