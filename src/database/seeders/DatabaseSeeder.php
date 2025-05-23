

<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call individual seeders

        // Seed users
        $this->seedUsers();
        $this->callSeeders();
    }

    private function seedUsers(): void
    {
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);
        $admin->assignRole('admin');

        $dosen = User::factory()->create([
            'name' => 'Dosen',
            'email' => 'dosen@dosen.com',
            'password' => 'password',
        ]);
        $dosen->assignRole('dosen');    
        
        $mahasiswa = User::factory()->create([
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@mahasiswa.com',
            'password' => 'password',
        ]);
        $mahasiswa->assignRole('mahasiswa');
        
    }

    private function callSeeders(): void {
        $this->call([
            RoleSeeder::class,
        ]);

    }
}