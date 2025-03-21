<?php

namespace Database\Seeders;

use App\Models\Manager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manager = Manager::query()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '123123123'
        ]);
    }
}
