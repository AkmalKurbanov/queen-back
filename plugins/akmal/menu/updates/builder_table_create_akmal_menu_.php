<?php namespace Akmal\Menu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalMenu extends Migration
{
    public function up()
    {
        Schema::create('akmal_menu_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('item');
            $table->string('link');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_menu_');
    }
}
