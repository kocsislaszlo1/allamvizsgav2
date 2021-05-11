<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(PermissionRolesSeeder::class);
        $this->call(EsemenyekSeeder::class);
        $this->call(SzekciokSeeder::class);
        $this->call(ModeratorokSeeder::class);
    }
}
