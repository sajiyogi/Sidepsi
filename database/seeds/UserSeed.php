<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'nama_lengkap' => 'saji yogie permana',
            'tanggal_lahir' => Carbon::create('2000', '01', '01'),
            'perusahaan'=> 'Pertamina asset 3',
            'email' => 'admin@admin.com',
            // 'status' => 'Active',
            'password' => bcrypt('password')
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'name' => 'Pakar',
           'nama_lengkap' => 'dr.endah ronawulan',
            'tanggal_lahir' => Carbon::create('2000', '01', '01'),
            'perusahaan'=> 'Pertamina asset 1',
            'email' => 'pakar@pakar.com',
            // 'status' => 'Active',
            'password' => bcrypt('password')
        ]);
        $user->assignRole('pakar');

        $user = User::create([
            'name' => 'User',
           'nama_lengkap' => 'Faturrahman',
           'tanggal_lahir' => Carbon::create('2000', '01', '01'),
           'perusahaan'=> 'Pertamina asset 3',
            'email' => 'user@user.com',
            // 'status' => 'Active',
            'password' => bcrypt('password')
        ]);
        $user->assignRole('userverified');
        $user = User::create([
            'name' => 'Userdua',
           'nama_lengkap' => 'Mutiah',
           'tanggal_lahir' => Carbon::create('2000', '01', '01'),
           'perusahaan'=> 'Pertamina asset 3',
            'email' => 'user@Userdua.com',
            // 'status' => 'Active',
            'password' => bcrypt('password')
        ]);
        $user->assignRole('user');

    }
}
