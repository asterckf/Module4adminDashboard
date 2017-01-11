<?php

use Illuminate\Database\Seeder;
use App\Role;

class AdminDashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Clear the database
        DB::table('admins')->delete();
        DB::table('users')->delete();
        DB::table('roles')->delete();


        //Seed admins table
        DB::table('admins')->insert([
            'name' => 'Ahmad',
            'email' => 'ahamdsukaikan@gmail.com',
        ]);

        //Seed roles table
        $roleAccountant = Role::create(array(
                'name'=>'Accountant',
                'description'=>'Analyze and compile record of asset,liability and capital.Summarize balance, profit and loss statement'
        ));

         $roleAccountantDelegate = Role::create(array(
             'name'=>'Accountant Delegate',
             'description'=>'Working with spreadsheet,sales and purchase ledgers and journals.Sorting out incoming and outgoing daily transaction. Calculate and check to make sure payment and biling is recorded correctly'
         ));

        $roleAuditor = Role::create(array(
            'name'=>'Auditor',
            'description'=>'Planning for annual audit.Finalize audit record. Examine company accounts and financial control system'
        ));

        $roleAuditorDelegate = Role::create(array(
            'name'=>'Auditor Delegate',
            'description'=>'Review accountant documentation. Ensure validity and legality of financial record from accountant'
        ));

        $roleCompanyDirector = Role::create(array(
            'name'=>'Company Director',
            'description'=>'Monitor job assigments. Analyze, review and develop business strategies from audit report.'
        ));

        $roleCompanySecretary = Role::create(array(
            'name'=>'Company Secretary',
            'description'=>'Prepare,approve,sign and seal agreements leases, legal form and official documents. Implement the policies formulated by the directors'
        ));


        //Seed users table
        DB::table('users')->insert(array(
        array('username'=>'Rosmah',
            'email'=>str_random(10).'@gmail.com',
            'role_id'=>$roleAccountant ->id,
            'password'=>bcrypt('secret')),
        array('username'=>'Ng',
            'email'=>str_random(10).'@gmail.com',
            'role_id'=>$roleAccountant ->id,
            'password'=>bcrypt('secret')),
        array('username'=>'Farah',
            'email'=>str_random(10).'@gmail.com',
            'role_id'=>$roleAccountantDelegate->id,
            'password'=>bcrypt('secret')),
        array('username'=>'Gabriel',
            'email'=>str_random(10).'@gmail.com',
            'role_id'=>$roleAuditor->id,
            'password'=>bcrypt('secret')),
        array('username'=>'Fakrullah',
            'email'=>str_random(10).'@gmail.com',
            'role_id'=>$roleAuditorDelegate->id,
            'password'=>bcrypt('secret')),
        array('username'=>'Hanis',
            'email'=>str_random(10).'@gmail.com',
            'role_id'=>$roleCompanyDirector->id,
            'password'=>bcrypt('secret')),
        array('username'=>'Chan',
            'email'=>str_random(10).'@gmail.com',
            'role_id'=>$roleCompanySecretary->id,
            'password'=>bcrypt('secret')),
        array('username'=>'Alif',
            'email'=>str_random(10).'@gmail.com',
            'role_id'=>$roleAccountant->id,
            'password'=>bcrypt('secret')),
        array('username'=>'Anis',
            'email'=>str_random(10).'@gmail.com',
            'role_id'=>$roleAuditorDelegate->id,
            'password'=>bcrypt('secret')),
        array('username'=>'Najib',
            'email'=>str_random(10).'@gmail.com',
            'role_id'=>$roleAuditor->id,
            'password'=>bcrypt('secret')),
        array('username'=>'Jack',
            'email'=>str_random(10).'@gmail.com',
            'role_id'=>$roleAccountantDelegate->id,
            'password'=>bcrypt('secret')),
        array('username'=>'Logan',
            'email'=>str_random(10).'@gmail.com',
            'role_id'=>$roleCompanySecretary->id,
            'password'=>bcrypt('secret')),
        array('username'=>'Daniel',
            'email'=>str_random(10).'@gmail.com',
            'role_id'=>$roleCompanyDirector->id,
            'password'=>bcrypt('secret')),
        ));

    }
}
