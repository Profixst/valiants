<?php namespace ProFixS\Valiants\Updates;

use ProFixS\Valiants\Models\Group;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use Schema;

class AddSortableToGroup extends Migration
{
    public function up()
    {
        Schema::table('profixs_valiants_groups', function(Blueprint $table) {
            $table->integer('sort_order')->default(0);
        });
    }

    public function down()
    {
    }
}
