<?php namespace Akmal\DescOrder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalDescorder7 extends Migration
{
    public function up()
    {
        Schema::table('akmal_descorder_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_descorder_', function($table)
        {
            $table->timestamp('created_at')->default('current_timestamp()');
            $table->timestamp('updated_at')->default('\'0000-00-00 00:00:00\'');
            $table->timestamp('deleted_at')->default('\'0000-00-00 00:00:00\'');
        });
    }
}
