<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::where('name', 'zyflow')->delete();
        \App\User::create([
            'name' => 'Lauris',
            'email' => 'zyflow@gmail.com',
            'password' => bcrypt('localparolebiofood'),
            'admin' => 1,
        ]);
    }
}
