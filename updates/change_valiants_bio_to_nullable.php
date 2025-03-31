<?php namespace ProFixS\Valiants\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class ChangeValiantsBioToNullable extends Migration
{
    public function up()
    {
        Schema::table('profixs_valiants_people', function(Blueprint $table) {
            $table->longText('bio')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('profixs_valiants_people', function(Blueprint $table){
            $table->longText('bio')->change();
        });
    }
}
