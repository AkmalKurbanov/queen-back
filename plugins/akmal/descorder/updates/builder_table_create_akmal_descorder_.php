<?php namespace Akmal\DescOrder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalDescorder extends Migration
{
    public function up()
    {
        Schema::create('akmal_descorder_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('heading');
            $table->text('description')->nullable();
            $table->string('link');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_descorder_');
    }
}
