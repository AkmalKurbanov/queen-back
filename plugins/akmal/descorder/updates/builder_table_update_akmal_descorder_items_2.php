<?php namespace Akmal\DescOrder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalDescorderItems2 extends Migration
{
    public function up()
    {
        Schema::table('akmal_descorder_items', function($table)
        {
            $table->string('image');
            $table->text('description')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_descorder_items', function($table)
        {
            $table->dropColumn('image');
            $table->text('description')->default('NULL')->change();
        });
    }
}
