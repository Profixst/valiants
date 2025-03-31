<?php namespace ProFixS\Valiants\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddBioTimelineField extends Migration
{
    public function up()
    {
        Schema::table('profixs_valiants_people', function(Blueprint $table) {
            $table->text('bio_timeline')->nullable();
        });
    }

    public function down()
    {
        Schema::table('profixs_valiants_people', function(Blueprint $table){
            $table->dropColumn('bio_timeline');
        });
    }
}
