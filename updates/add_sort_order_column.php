<?php namespace ProFixS\Valiants\Updates;

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use ProFixS\Valiants\Models\Valiant;
use Schema;

class AddSortableToValiants extends Migration
{
    public function up()
    {
        Schema::table('profixs_valiants_people', function(Blueprint $table) {
            $table->integer('sort_order')->default(0);
        });

    }

    public function down()
    {
        Schema::table('profixs_valiants_people', function(Blueprint $table){
            $table->dropColumn('sort_order');
        });
    }
}
