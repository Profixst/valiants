<?php namespace ProFixS\Valiants\Updates;

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use October\Rain\Support\Facades\Schema;

class AddFieldsColumnToValiants extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('profixs_valiants_people', 'fields')) {
            Schema::table('profixs_valiants_people', function (Blueprint $table) {
                $table->text('fields')->nullable();
            });
        }

        Schema::table('profixs_valiants_people', function (Blueprint $table) {
            $table->string('position', 1000)->change();
        });
    }

    public function down()
    {
    }
}
