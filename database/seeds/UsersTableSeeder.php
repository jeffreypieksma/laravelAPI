<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
          'name' => 'admin',
          'email' => 'admin@admin.com',
          'password' => bcrypt('admin'),
          'is_admin' => 1,
          'api_token' => str_random(60),
        	'remember_token' => str_random(10),
      ]);
      factory(App\User::class, 15)->create();  
    }
}