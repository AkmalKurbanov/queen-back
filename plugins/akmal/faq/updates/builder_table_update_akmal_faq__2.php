<?php namespace Akmal\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalFaq2 extends Migration
{
    public function up()
    {
        Schema::table('akmal_faq_', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_faq_', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
