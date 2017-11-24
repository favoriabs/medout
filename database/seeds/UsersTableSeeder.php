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

      DB::table('users')->insert([
      'name' => 'CWCCI 2',
      'email' => 'info2@cwcci.com',
      'password' => bcrypt('cwcci@123'),
      ]);

      DB::table('users')->insert([
      'name' => 'CWCCI 3',
      'email' => 'info3@cwcci.com',
      'password' => bcrypt('cwcci@123'),
      ]);

      DB::table('users')->insert([
      'name' => 'CWCCI 4',
      'email' => 'info4@cwcci.com',
      'password' => bcrypt('cwcci@123'),
      ]);

      DB::table('users')->insert([
      'name' => 'CWCCI 5',
      'email' => 'info5@cwcci.com',
      'password' => bcrypt('cwcci@123'),
      ]);

      DB::table('users')->insert([
      'name' => 'CWCCI 6',
      'email' => 'info6@cwcci.com',
      'password' => bcrypt('cwcci@123'),
      ]);

      DB::table('users')->insert([
      'name' => 'CWCCI 7',
      'email' => 'info7@cwcci.com',
      'password' => bcrypt('cwcci@123'),
      ]);

      DB::table('users')->insert([
      'name' => 'CWCCI 8',
      'email' => 'info8@cwcci.com',
      'password' => bcrypt('cwcci@123'),
      ]);

      DB::table('users')->insert([
      'name' => 'CWCCI 9',
      'email' => 'info9@cwcci.com',
      'password' => bcrypt('cwcci@123'),
      ]);

      DB::table('users')->insert([
      'name' => 'CWCCI 10',
      'email' => 'info10@cwcci.com',
      'password' => bcrypt('cwcci@123'),
      ]);

      DB::table('users')->insert([
      'name' => 'CWCCI 11',
      'email' => 'info11@cwcci.com',
      'password' => bcrypt('cwcci@123'),
      ]);

      DB::table('users')->insert([
      'name' => 'CWCCI 12',
      'email' => 'info12@cwcci.com',
      'password' => bcrypt('cwcci@123'),
      ]);

      DB::table('users')->insert([
      'name' => 'CWCCI 13',
      'email' => 'info13@cwcci.com',
      'password' => bcrypt('cwcci@123'),
      ]);

      DB::table('users')->insert([
      'name' => 'CWCCI 14',
      'email' => 'info14@cwcci.com',
      'password' => bcrypt('cwcci@123'),
      ]);
    }
}
