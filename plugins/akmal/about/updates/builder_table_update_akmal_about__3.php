<?php namespace Akmal\About\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalAbout3 extends Migration
{
    public function up()
    {
        Schema::table('akmal_about_', function($table)
        {
            $table->renameColumn('abcd', 'description');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_about_', function($table)
        {
            $table->renameColumn('description', 'abcd');
        });
    }
}
