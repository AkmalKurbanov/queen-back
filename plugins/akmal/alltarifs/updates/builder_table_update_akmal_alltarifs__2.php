<?php namespace Akmal\Alltarifs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalAlltarifs2 extends Migration
{
    public function up()
    {
        Schema::table('akmal_alltarifs_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->boolean('ssl')->default(null)->change();
            $table->boolean('support')->default(null)->change();
            $table->boolean('consult')->default(null)->change();
            $table->boolean('php')->default(null)->change();
            $table->boolean('ruby')->default(null)->change();
            $table->boolean('python')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_alltarifs_', function($table)
        {
            $table->dropColumn('id');
            $table->boolean('ssl')->default(NULL)->change();
            $table->boolean('support')->default(NULL)->change();
            $table->boolean('consult')->default(NULL)->change();
            $table->boolean('php')->default(NULL)->change();
            $table->boolean('ruby')->default(NULL)->change();
            $table->boolean('python')->default(NULL)->change();
        });
    }
}
