<?php namespace ProFixS\Valiants\Updates;

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use Schema;

class AddPriorityToGroupValiantTable extends Migration
{
    public function up()
    {
        Schema::table('profixs_group_valiant', function(Blueprint $table) {
            $table->integer('priority')->nullable()->index();
        });
    }

    public function down()
    {
        Schema::table('profixs_group_valiant', function(Blueprint $table){
            $table->dropColumn('priority');
        });
    }
}
