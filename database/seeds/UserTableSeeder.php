<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
  public function run()
  {
  
	DB::table('users')->delete();
    
    User::create(array(
    	'name'     => 'Mahbub Rahman',
        'username' => 'mahbub123',
        'email'    => 'mahbub.shuvo10@gmail.com',
        'password' => Hash::make('m123456'),
    ));
  }
}