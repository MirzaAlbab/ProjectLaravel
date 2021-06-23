<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Admin',
            'tanggal_lahir' => 24/02/2001,
            'gender' => 'M',
            'email' => 'admin@gmail.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'telp' => '085856239191',
            'alamat' => 'Jombang',
            'password' => Hash::make('admin123'),
            'created_at' => \Carbon\Carbon::now(),
            'role' => 'admin'
        ]);
        // DB::table('users')->insert([
        //     'name' => 'User',
        //     'email' => 'user@gmail.com',
        //     'password' => Hash::make('user123'),
        //     'role' => 'user',
        //     'created_at' => \Carbon\Carbon::now(),
        //     'email_verified_at' => \Carbon\Carbon::now()
        // ]);
    }
}
