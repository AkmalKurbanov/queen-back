<?php namespace Akmal\DescOrder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalDescorder extends Migration
{
    public function up()
    {
        Schema::table('akmal_descorder_', function($table)
        {
            $table->text('description')->default('null')->change();
            $table->text('link')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_descorder_', function($table)
        {
            $table->text('description')->default('NULL')->change();
            $table->string('link', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
