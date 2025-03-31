<?php namespace ProFixS\Valiants\Updates;

use October\Rain\Database\Schema\Blueprint;
use ProFixS\Valiants\Models\Group;
use October\Rain\Database\Updates\Migration;
use Schema;



class AddSortableNumbersToGroups extends Migration
{
    public function up()
    {
        Group::withoutGlobalScopes()
            ->get()
            ->each(function($item) {
                if ($item->sort_order == 0) {
                    $item->sort_order = Group::withoutGlobalScopes()->max('sort_order') + 1;
                    $item->save();
                }
            });
    }

    public function down()
    {
    }
}
