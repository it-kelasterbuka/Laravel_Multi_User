<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Mas Operator',
                'email' => 'operator@gmail.com',
                'role' => 'operator',
                'password' => bcrypt('operator')
            ],
            [
                'name' => 'Mas Keuangan',
                'email' => 'keuangan@gmail.com',
                'role' => 'keuangan',
                'password' => bcrypt('keuangan')
            ],
            [
                'name' => 'Mas Marketing',
                'email' => 'marketing@gmail.com',
                'role' => 'marketing',
                'password' => bcrypt('marketing')
            ],
        ];

        foreach($userData as $key => $val)
        {
            User::create($val);
        }
    }
}
