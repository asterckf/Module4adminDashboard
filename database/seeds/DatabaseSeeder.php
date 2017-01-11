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
        Eloquent::unguard();

/*        //call class and run seed*/
        $this->call('AdminDashboardSeeder');
        $this->command->info("Tables seeded");
    }
}
