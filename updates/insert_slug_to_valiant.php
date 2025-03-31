<?php
namespace ProFixS\Valiants\Updates;

use October\Rain\Database\Updates\Migration;
use ProFixS\Valiants\Models\Valiant;
use Str;

class InsertSlugToValiant extends Migration
{

    public function up()
    {
        Valiant::chunk(100, function($valiants){
            foreach ($valiants as $valiant) {
                if (empty($valiant->slug)){
                    $valiant->slug = Str::slug($valiant->first_name.' '.$valiant->last_name);
                    $valiant->forceSave();
                }
            }
        });
    }
}
