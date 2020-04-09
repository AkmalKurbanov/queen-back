<?php namespace Akmal\Alltarifs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalAlltarifs extends Migration
{
    public function up()
    {
        Schema::create('akmal_alltarifs_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('description');
            $table->text('bonus');
            $table->string('platform');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_alltarifs_');
    }
}
