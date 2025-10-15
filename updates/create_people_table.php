<?php namespace ProFixS\Valiants\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePeopleTable extends Migration
{
    public function up()
    {
        Schema::create('profixs_valiants_people', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('position');
            $table->longText('bio');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profixs_valiants_people');
    }
}
