<?php

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
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ParentPageSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(PermissionRoleSeeder::class);
    }
}
