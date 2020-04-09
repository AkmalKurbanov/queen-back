<?php namespace Akmal\About\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalAbout extends Migration
{
    public function up()
    {
        Schema::table('akmal_about_', function($table)
        {
            $table->string('img');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_about_', function($table)
        {
            $table->dropColumn('img');
        });
    }
}
