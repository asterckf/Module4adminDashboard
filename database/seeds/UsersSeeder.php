<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array('username'=>'','email'=>'','role_id'=>'',),
            array('name'=>'Accountant Delegate','description'=>'Working with spreadsheet,sales and purchase ledgers and journals.
            Sorting out incoming and outgoing daily transaction. Calculate and check to make sure payment and biling is record
            correctly'),


        ));
    }
}
