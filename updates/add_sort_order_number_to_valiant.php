<?php namespace ProFixS\Valiants\Updates;

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use ProFixS\Valiants\Models\Valiant;
use Schema;

class AddSortableNumbersToValiants extends Migration
{
    public function up()
    {
        Valiant::withoutGlobalScopes()
            ->get()
            ->each(function($item, $key) {
                $item->sort_order = $key + 1;
                $item->forceSave();
            });

    }

    public function down()
    {
    }
}
