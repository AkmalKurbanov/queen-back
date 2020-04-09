<?php namespace Akmal\DescOrder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalDescorder5 extends Migration
{
    public function up()
    {
        Schema::rename('akmal_descorder_items', 'akmal_descorder_');
        Schema::table('akmal_descorder_', function($table)
        {
            $table->text('description')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::rename('akmal_descorder_', 'akmal_descorder_items');
        Schema::table('akmal_descorder_items', function($table)
        {
            $table->text('description')->default('NULL')->change();
        });
    }
}
