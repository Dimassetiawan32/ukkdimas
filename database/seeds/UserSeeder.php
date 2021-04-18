<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role Admin
        $admin = User::create([
            'name'       => 'Dimas Setiawan',
            'email'      => 'admin@role',
            'password'   => bcrypt('iniadmin'),
        ]);
            
        $admin->assignRole('Admin');
            
        // Role User
        $user = User::create([
           'name'       => 'Yoga Arief',
           'email'      => 'user@role',
           'password'   => bcrypt('iniuser'),
        ]);

        $user->assignRole('User');
       
        // Role Kasir
        $kasir = User::create([
           'name'       => 'Akbar Satria',
           'email'      => 'kasir@role',
           'password'   => bcrypt('inikasir'),
        ]);

        $kasir->assignRole('Kasir');

    }
}
