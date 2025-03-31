<?php namespace ProFixS\Valiants\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddOrderNumberToGroupValiant extends Migration
{
    public function up()
    {
        Schema::table('profixs_group_valiant', function(Blueprint $table) {
            $table->integer('order_number')->nullable()->index();
        });
    }

    public function down()
    {
        Schema::table('profixs_group_valiant', function(Blueprint $table){
            $table->dropColumn('order_number');
        });
    }
}
