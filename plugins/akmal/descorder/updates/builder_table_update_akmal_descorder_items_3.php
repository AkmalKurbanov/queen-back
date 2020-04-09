<?php namespace Akmal\DescOrder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalDescorderItems3 extends Migration
{
    public function up()
    {
        Schema::table('akmal_descorder_items', function($table)
        {
            $table->dateTime('create_at');
            $table->dateTime('update_at');
            $table->text('description')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_descorder_items', function($table)
        {
            $table->dropColumn('create_at');
            $table->dropColumn('update_at');
            $table->text('description')->default('NULL')->change();
        });
    }
}
