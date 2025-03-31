<?php namespace ProFixS\Valiants\Updates;

use October\Rain\Database\Updates\Seeder;
use ProFixS\Valiants\Models\Group;
use Db;

/**
* seed groups
*/
class SeedGroups extends Seeder
{
	public function run()
	{
		Group::create([
			'name' => 'Загиблі Герої'
		]);
		Group::create([
			'name' => 'Керівництво'
		]);
		Group::create([
		    'name' => 'Виконавчий комітет'
        ]);
	}
}
