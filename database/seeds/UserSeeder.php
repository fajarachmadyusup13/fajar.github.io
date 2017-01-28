<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $user       = app()->make('App\User');
        $hasher     = app()->make('hash');
        $passwod    = $hasher->make('password');
        $api_token  = sha1(time());

        $user->fill([
          'username'  => 'Fajar',
          'email'     => 'redroar13@gmail.com',
          'password'  => $passwod,
          'api_token' => $api_token
        ]);

        $user->save();
    }
}
