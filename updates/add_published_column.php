<?php namespace ProFixS\Valiants\Updates;

use Schema;
use ProFixS\Valiants\Models\Valiant;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddPublishedToValiants extends Migration
{
    public function up()
    {
        Schema::table('profixs_valiants_people', function(Blueprint $table) {
            $table->boolean('published')->default(true);
        });
    }

    public function down()
    {
        Schema::table('profixs_valiants_people', function(Blueprint $table){
            $table->dropColumn('published');
        });
    }
}
