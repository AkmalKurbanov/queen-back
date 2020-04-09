<?php namespace Akmal\About\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalAbout4 extends Migration
{
    public function up()
    {
        Schema::table('akmal_about_', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_about_', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
