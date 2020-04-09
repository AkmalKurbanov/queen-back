<?php namespace Akmal\DescOrder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalDescorder3 extends Migration
{
    public function up()
    {
        Schema::table('akmal_descorder_', function($table)
        {
            $table->text('desc_img');
            $table->text('description')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_descorder_', function($table)
        {
            $table->dropColumn('desc_img');
            $table->text('description')->default('NULL')->change();
        });
    }
}
