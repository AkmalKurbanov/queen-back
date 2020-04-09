<?php namespace Akmal\Contacts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalContacts extends Migration
{
    public function up()
    {
        Schema::create('akmal_contacts_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('phone');
            $table->string('mail');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_contacts_');
    }
}
