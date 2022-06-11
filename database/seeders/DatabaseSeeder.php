<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::factory()->create([
            'name' => 'admin',
            'password' => bcrypt('adminstrongpassword'),
            'email' => 'test@example.com',
        ]);

        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'edit articles']); // ToDo define permissions

        $admin->assignRole($role);


    }
}
