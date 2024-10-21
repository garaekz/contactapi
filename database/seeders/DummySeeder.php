<?php

namespace Database\Seeders;

use App\Models\Form;
use App\Models\User;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@test.io',
            'password' => bcrypt('password'),
        ]);

        Form::factory()->create([
            'name' => 'Test Form',
            'user_id' => $user->id,
        ]);
    }
}
