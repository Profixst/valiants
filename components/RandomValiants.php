<?php namespace ProFixS\Valiants\Components;

use Cms\Classes\ComponentBase;
use ProFixS\Valiants\Models\Valiant;
use ProFixS\Pages\Models\Page;
use ProFixS\Valiants\Models\Group;

class RandomValiants extends ComponentBase
{
    public $count;
    public $valiants;
    public $title;
    public $description;

    public function componentDetails()
    {
        return [
            'name' => 'profixs.valiants::lang.component.random_valiants.name',
            'description' => 'profixs.valiants::lang.component.random_valiants.description',
        ];
    }

    /**
     * defineProperties
     */
    public function defineProperties()
    {
        return [
            'title' => [
                'title' => 'profixs.valiants::lang.component.random_valiants.fields.title',
                'group' => 'profixs.valiants::lang.component.random_valiants.groups.main',
                'span' => 'left',
            ],
            'count' => [
                'title' => 'profixs.valiants::lang.component.random_valiants.fields.count',
                'group' => 'profixs.valiants::lang.component.random_valiants.groups.main',
                'type' => 'dropdown',
                'options' => array_combine($range = range(1, 20), $range),
                'default' => 1,
                'required' => true,
                'span' => 'right',
            ],
            'description' => [
                'title' => 'profixs.valiants::lang.component.random_valiants.fields.description',
                'group' => 'profixs.valiants::lang.component.random_valiants.groups.main',
                'type' => 'text',
                'span' => 'left',
            ],
            'withoutGroup' => [
                'title' => 'profixs.valiants::lang.component.random_valiants.fields.without_group',
                'group' => 'profixs.valiants::lang.component.random_valiants.groups.filter',
                'type' => 'checkbox',
                'span' => 'left',
            ],
            'includeGroups' => [
                'title' => 'profixs.valiants::lang.component.random_valiants.fields.include_groups',
                'group' => 'profixs.valiants::lang.component.random_valiants.groups.filter',
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
        $this->count = $this->property('count');
        $this->valiants = $this->loadValiants();
        $this->title = $this->property('title');
        $this->description = $this->property('description');
    }

    /**
     * loadvaliants
     */
    protected function loadValiants()
    {
        return $this->applyFilters(Valiant::isPublished())
            ->inRandomOrder()
            ->limit($this->property('count') ?? 1)
            ->get();
    }

    /**
     * applyFilters
     */
    protected function applyFilters($query)
    {
        $dirty = $this->property('withoutGroup');

        if ($includeGroups = $this->property('includeGroups')) {
            $query = $query->filterGroups($includeGroups, $dirty);
        } elseif ($dirty) {
            $query = $query->whereDoesntHave('groups');
        }

        return $query;
    }
}
