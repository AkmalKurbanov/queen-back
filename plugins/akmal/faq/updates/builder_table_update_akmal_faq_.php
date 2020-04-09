<?php namespace Akmal\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalFaq extends Migration
{
    public function up()
    {
        Schema::table('akmal_faq_', function($table)
        {
            $table->dropColumn('id');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_faq_', function($table)
        {
            $table->integer('id');
        });
    }
}
