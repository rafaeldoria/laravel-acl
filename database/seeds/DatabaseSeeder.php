<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRolesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUsersTableSeeder::class);
    }
}
