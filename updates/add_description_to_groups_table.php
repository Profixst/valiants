<?php namespace ProFixS\Valiants\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddDescriptionToGroup extends Migration
{
    public function up()
    {
        Schema::table('profixs_valiants_groups', function(Blueprint $table) {
            $table->longText('description')->nullable();
        });
    }

    public function down()
    {
        Schema::table('profixs_valiants_groups', function(Blueprint $table){
            $table->dropColumn('description');
        });
    }
}
