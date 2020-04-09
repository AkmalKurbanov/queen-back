<?php namespace Akmal\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalFaq extends Migration
{
    public function up()
    {
        Schema::create('akmal_faq_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('question');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_faq_');
    }
}
