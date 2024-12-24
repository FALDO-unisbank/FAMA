<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = User::updateOrCreate(
            [
                'id' => 1,
            ],
            [
            'nama' => 'Kelompok FAMA',
            'password' => bcrypt('passwordbenar'),
            'email' => 'kelfama@mail.com',
        ]);
    }
}
