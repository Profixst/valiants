<?php namespace ProFixS\Valiants\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/class CreateGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('profixs_valiants_groups', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('profixs_group_valiant', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('group_id');
            $table->integer('valiant_id');
            $table->integer('person_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('profixs_valiants_groups');
        Schema::dropIfExists('profixs_group_valiant');
    }
}

