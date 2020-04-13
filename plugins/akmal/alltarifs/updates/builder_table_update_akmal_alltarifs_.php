<?php namespace Akmal\Alltarifs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalAlltarifs extends Migration
{
    public function up()
    {
        Schema::table('akmal_alltarifs_', function($table)
        {
            $table->text('title');
            $table->integer('price_month');
            $table->integer('price_year');
            $table->text('visits');
            $table->integer('sites');
            $table->integer('disk');
            $table->boolean('ssl')->nullable();
            $table->boolean('support')->nullable();
            $table->boolean('consult')->nullable();
            $table->boolean('php')->nullable();
            $table->boolean('ruby')->nullable();
            $table->boolean('python')->nullable();
            $table->text('subdomains');
            $table->text('mail');
            $table->text('ftp_db');
            $table->dropColumn('description');
            $table->dropColumn('bonus');
            $table->dropColumn('platform');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_alltarifs_', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('price_month');
            $table->dropColumn('price_year');
            $table->dropColumn('visits');
            $table->dropColumn('sites');
            $table->dropColumn('disk');
            $table->dropColumn('ssl');
            $table->dropColumn('support');
            $table->dropColumn('consult');
            $table->dropColumn('php');
            $table->dropColumn('ruby');
            $table->dropColumn('python');
            $table->dropColumn('subdomains');
            $table->dropColumn('mail');
            $table->dropColumn('ftp_db');
            $table->text('description');
            $table->text('bonus');
            $table->string('platform', 191);
        });
    }
}
