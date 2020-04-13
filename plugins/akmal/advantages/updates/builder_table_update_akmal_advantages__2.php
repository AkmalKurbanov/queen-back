<?php namespace Akmal\Advantages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalAdvantages2 extends Migration
{
    public function up()
    {
        Schema::table('akmal_advantages_', function($table)
        {
            $table->text('icon')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_advantages_', function($table)
        {
            $table->dropColumn('icon');
        });
    }
}
