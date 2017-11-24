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
      'name' => 'CWCCI 1',
      'email' => 'info@cwcci.com',
      'password' => bcrypt('cwcci@123'),
      ]);
    }
}
