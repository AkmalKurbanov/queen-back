<?php namespace Akmal\Contacts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalContacts extends Migration
{
    public function up()
    {
        Schema::table('akmal_contacts_', function($table)
        {
            $table->string('place');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_contacts_', function($table)
        {
            $table->dropColumn('place');
        });
    }
}
