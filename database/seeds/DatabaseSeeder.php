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
        // $this->call(UsersTableSeeder::class);
    $this->call(PermissionsSeeder::class);
    // $this->call(CategorySeeder::class);
    // $this->call(ColorSeeder::class);
    // $this->call(TypeSeeder::class);
    // $this->call(SizeSeeder::class);
    // $this->call(ProviderSeeder::class);
    }
}
