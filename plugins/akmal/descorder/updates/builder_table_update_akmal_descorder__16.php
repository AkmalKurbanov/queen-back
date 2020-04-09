<?php namespace Akmal\DescOrder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalDescorder16 extends Migration
{
    public function up()
    {
        Schema::table('akmal_descorder_', function($table)
        {
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_descorder_', function($table)
        {
            $table->string('image', 191);
        });
    }
}
