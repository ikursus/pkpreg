<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample Data 1
        DB::table('users')->insert([
            'name' => 'Admin Ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => bcrypt('admin')
            // 'password' => Hash::make('admin')
        ]);

        // Sample Data 2
        DB::table('users')->insert([
            'name' => 'Admin Johari',
            'email' => 'johari@gmail.com',
            'password' => bcrypt('johari')
            // 'password' => Hash::make('admin')
        ]);

        // Sample Data 3
        DB::table('users')->insert([
            'name' => 'Siti',
            'email' => 'siti@gmail.com',
            'password' => bcrypt('siti')
            // 'password' => Hash::make('admin')
        ]);
    }
}
