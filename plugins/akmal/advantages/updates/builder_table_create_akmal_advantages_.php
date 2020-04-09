<?php namespace Akmal\Advantages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalAdvantages extends Migration
{
    public function up()
    {
        Schema::create('akmal_advantages_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->integer('icon');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_advantages_');
    }
}
