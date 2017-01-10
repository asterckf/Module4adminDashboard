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
        $this->call('RolesSeeder');
        $this->command->info("Roles table seeded");
        $this->call('AdminDetailsSeeder');
    }
}
