<?php namespace Akmal\About\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalAbout extends Migration
{
    public function up()
    {
        Schema::create('akmal_about_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_about_');
    }
}
