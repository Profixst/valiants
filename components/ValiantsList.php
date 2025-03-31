<?php namespace ProFixS\Valiants\Components;

use Cms\Classes\ComponentBase;
use ProFixS\Valiants\Models\Group;

class ValiantsList extends ComponentBase
{
    public $group;
    public function componentDetails()
    {
        return [
            'name' => 'profixs.valiants::lang.component.valiant_list.name',
            'description' => 'profixs.valiants::lang.component.valiant_list.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'groupType' => [
                'description' => 'profixs.valiants::lang.component.valiant_list.group_type.description',
                'title' => 'profixs.valiants::lang.component.valiant_list.group_type.title',
                'default' => '1',
                'type' => 'dropdown',
                'options' => $this->groupOptions(),
                'showExternalParam' => false
            ]
        ];
    }

    public function onRun()
    {
        $group = Group::with([
            'valiants' => function($query){
                $query->isPublished()->withPivot('order_number')->orderBy('order_number');
            }
        ])->find($this->property('groupType'));
        if (!$group){
            $this->setStatusCode('404');
            return $this->controller->run('404');
        }
        $this->group = $group;
    }

    public function groupOptions()
    {
        $groups = Group::all();
        return $groups->lists('name', 'id');
    }
}
