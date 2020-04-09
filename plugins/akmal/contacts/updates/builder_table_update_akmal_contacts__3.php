<?php namespace Akmal\Contacts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalContacts3 extends Migration
{
    public function up()
    {
        Schema::table('akmal_contacts_', function($table)
        {
            $table->string('phone', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_contacts_', function($table)
        {
            $table->smallInteger('phone')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
