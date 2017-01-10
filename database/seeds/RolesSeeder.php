<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//      DB::table('roles')->delete();
        DB::table('roles')->insert(array(
            array('name'=>'Accountant','description'=>'Analyze and compile record of asset,
            liability and capital.Summarize balance, profit and loss statement'),
            array('name'=>'Accountant Delegate','description'=>'Working with spreadsheet,sales and purchase ledgers and journals.
            Sorting out incoming and outgoing daily transaction. Calculate and check to make sure payment and biling is record
            correctly'),
            array('name'=>'Auditor','description'=>'Planning for annual audit.Finalize audit record.
            Examine company accounts and financial control system'),
            array('name'=>'Auditor Delegate','description'=>'Review accountant documentation. Ensure validity and legality
            of financial record from accountant'),
            array('name'=>'Company Director','description'=>'Monitor job assigments. Analyze, review and develop
            business strategies from audit report.'),
            array('name'=>'Company Secretary','description'=>'Prepare,approve,sign and seal agreements leases, legal form
            and official documents. Implement the policies formulated by the directors'),

        ));
    }
}
