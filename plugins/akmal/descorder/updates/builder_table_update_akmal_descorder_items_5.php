<?php namespace Akmal\DescOrder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalDescorderItems5 extends Migration
{
    public function up()
    {
        Schema::table('akmal_descorder_items', function($table)
        {
            $table->text('description')->default('null')->change();
            $table->smallInteger('update_at')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_descorder_items', function($table)
        {
            $table->text('description')->default('NULL')->change();
            $table->dateTime('update_at')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
