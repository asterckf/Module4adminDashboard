<?php

use Illuminate\Database\Seeder;

class AdminDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_details')->insert([
            'name' => 'Ahmad',
            'email' => 'ahamdsukaikan@gmail.com',
        ]);
    }
}
