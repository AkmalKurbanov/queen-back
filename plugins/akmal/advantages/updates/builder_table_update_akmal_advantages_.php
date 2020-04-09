<?php namespace Akmal\Advantages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalAdvantages extends Migration
{
    public function up()
    {
        Schema::table('akmal_advantages_', function($table)
        {
            $table->dropColumn('icon');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_advantages_', function($table)
        {
            $table->integer('icon');
        });
    }
}
