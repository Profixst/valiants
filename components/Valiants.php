<?php namespace ProFixS\Valiants\Components;

use Cms\Classes\ComponentBase;
use ProFixS\Valiants\Models\valiant;
use ProFixS\Valiants\Models\Group;

class Valiants extends ComponentBase
{
    public $valiants;
    public $title;

    public function componentDetails()
    {
        return [
            'name' => 'Valiants',
            'description' => 'Valiants List'
        ];
    }

    public function defineProperties()
    {
		return [
				'title' => [
					'title' => 'Заголовок',
					'group' => 'Головне'
				],
				'excludeGroups' => [
                'title' => 'Виключити з відображення наступні групи:',
                'group' => 'Фільтр',
                'type' => 'checkboxlist',
                'options' =>  Group::lists('name', 'id'),
                'showExternalParam' => false
            ]
        ];
    }

    public function onRun()
    {
        $this->title = $this->property('title');
        $this->valiants = $this->loadValiants();
    }

    public function loadValiants()
    {
        $query = Valiant::isPublished();

        if ($excludeIds = $this->property('excludeGroups')) {
            $query = $query->whereHas('groups', function ($query) use ($excludeIds) {
                return $query->whereNotIn('group_id', $excludeIds);
            })->orWhereDoesntHave('groups');
        }

        return $query->get();
    }
}