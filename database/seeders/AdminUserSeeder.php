<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        if (!User::where('email', 'residence@gmail.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'residence@gmail.com',
                'password' => bcrypt('residence@2004'),
                'role' => 'admin',
            ]);
        }
    }
}
