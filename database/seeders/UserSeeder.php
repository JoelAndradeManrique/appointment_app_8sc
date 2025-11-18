<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         User::factory()->create([
            'name' => 'joel andrade',
            'email' => 'joel@tecnm.com',
            'password' => bcrypt('12345678'),
            'id_number' => '123456789',
            'phone' => '987567',
            'address' => 'calle 11 colonia de mala muerte xd',
        ])->assignRole('Doctor');
    }
}
