<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // set timezone
        date_default_timezone_set('Asia/Jakarta');

        // masukin data admin ke table users
        DB::table('users')->insert([
            'nama' => 'admin',
            'email' => 'admin@immobisp.com',
            'password' => '$2y$10$S73zl5dmAfwU4LnFBrdi2u.hD6952O464NOApMpo2.3aQgxIgT7AO', // superuser
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
