<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCountViewsTable extends Migration
{
    public function up()
    {
        DB::statement('CREATE VIEW userCountViews AS
                       SELECT name, count(name) as "count"
                       FROM roles a INNER JOIN
                        users b ON a.id = b.role_id
                        GROUP BY name;           
                     ');
    }

    public function down()
    {
        DB::statement("DROP VIEW userCountViews");
    }

}
