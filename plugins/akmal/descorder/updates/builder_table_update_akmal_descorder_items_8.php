<?php namespace Akmal\DescOrder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalDescorderItems8 extends Migration
{
    public function up()
    {
        Schema::table('akmal_descorder_items', function($table)
        {
            $table->text('description')->default('null')->change();
            $table->dropColumn('created_at');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_descorder_items', function($table)
        {
            $table->text('description')->default('NULL')->change();
            $table->timestamp('created_at');
        });
    }
}
