<?php namespace ProFixS\Valiants\Components;

use Cms\Classes\ComponentBase;
use ProFixS\Valiants\Models\Group;
use ProFixS\Valiants\Models\Valiant;

class ValiantsListByGroups extends ComponentBase
{
    public $groups;
    public $title;
    public $valiantsWithoutGroup;

    public function componentDetails()
    {
        return [
            'name' => 'ValiantsListByGroups',
        ];
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title' => 'Заголовок',
                'group' => 'Головне',
            ],
            'hideWithoutGroup' => [
                'title' => 'Не відображати персон без групи',
                'group' => 'Фільтр',
                'type' => 'checkbox',
                'span' => 'left',
            ],
            'includeGroups' => [
                'title' => 'Відображати наступні групи (залишити пустим для вибору усіх груп):',
                'group' => 'Фільтр',
                'type' => 'checkboxlist',
                'options' =>  Group::lists('name', 'id'),
                'span' => 'left',
            ]
        ];
    }

    /**
     * onRun
     */
    public function onRun()
    {
        $this->groups = $this->loadGroups();
        $this->title = $this->property('title');
        $this->valiantsWithoutGroup = $this->loadValiantsWithoutGroup();
    }

    /**
     * loadvaliantsWithoutGroup
     */
    protected function loadvaliantsWithoutGroup()
    {
        if ($this->property('hideWithoutGroup')) {
            return;
        }

        return Valiant::isPublished()->whereDoesntHave('groups')->get();
    }

    /**
     * loadGroups
     */
    protected function loadGroups()
    {
        $query = Group::make();

        if ($includeGroups = $this->property('includeGroups')) {
            $query = $query->whereIn('id', $includeGroups);
        }

        $groups = $query->with([
            'valiants' => function ($query) {
                $query->isPublished()->withPivot('order_number', 'property')
                    ->orderBy('order_number');
            },
        ])->get();

        $groups->each(function ($item) {
            $maxPriority = $item->valiants->max('pivot.property');
            $maxOrderNumber = $item->valiants->max('pivot.order_number');

            $item->priorities = $item->valiants
                ->sortBy(function($item) use ($maxPriority, $maxOrderNumber) {
                    return [
                        (int)$item->pivot->property ?? $maxPriority + 1,
                        (int)$item->pivot->order_number ?? $maxOrderNumber + 1
                    ];
                })
                ->groupBy('pivot.property');
        });

        return $groups;
    }
}
