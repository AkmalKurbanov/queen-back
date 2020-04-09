<?php namespace Akmal\DescOrder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalDescorder2 extends Migration
{
    public function up()
    {
        Schema::table('akmal_descorder_', function($table)
        {
            $table->text('description')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_descorder_', function($table)
        {
            $table->text('description')->default('NULL')->change();
        });
    }
}
