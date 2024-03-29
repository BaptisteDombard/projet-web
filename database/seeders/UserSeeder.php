<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Baptiste Dombard',
            'slug' => Str::slug('Baptiste Dombard'),
            'email' => 'baptiste.dombard@student.hepl.be',
            'is_admin' => true,
        ]);
        User::factory()->count(9)->create();
    }
}
