<?php namespace Akmal\DescOrder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalDescorder6 extends Migration
{
    public function up()
    {
        Schema::table('akmal_descorder_', function($table)
        {
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->timestamp('deleted_at');
            $table->text('description')->nullable(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_descorder_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->text('description')->nullable()->default('NULL')->change();
        });
    }
}
