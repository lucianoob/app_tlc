<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TLC\User;

class UsersTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $master = DB::table('users')->where('username', 'master')->exists();
        if(!$master)
        {
            User::create([
                'id'    => 1,
                'name'    => 'Master',
                'username'    => 'master',
                'email'    => 'master@test.com',
                'password'   =>  Hash::make('M@st3r#2019'),
                'remember_token' =>  str_random(10),
                'token' =>  null,
                'active' =>  1,
            ]);
        }
        $test = DB::table('users')->where('username', 'test')->exists();
        if(!$test)
        {
            User::create([
                'id'    => 2,
                'name'    => 'User Test',
                'username'    => 'test',
                'email'    => 'user@test.com',
                'password'   =>  Hash::make('Us3r#2019'),
                'remember_token' =>  str_random(10),
                'token' =>  null,
                'active' =>  1,
            ]);
        }
    }
}
