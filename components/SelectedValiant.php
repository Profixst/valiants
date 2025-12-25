<?php namespace ProFixS\Valiants\Components;

use Cms\Classes\ComponentBase;
use ProFixS\Valiants\Models\valiant;

class SelectedValiant extends ComponentBase
{
    public $valiant;

    public function componentDetails()
    {
        return [
            'name' => 'profixs.valiants::lang.component.selected_valiant.name',
            'description' => 'profixs.valiants::lang.component.selected_valiant.description'
        ];
    }

    /**
     * defineProperties
     */
    public function defineProperties()
    {
        return [
            'valiant' => [
                'title'       => 'profixs.valiants::lang.component.selected_valiant.groups.main',
                'group'       => 'profixs.valiants::lang.component.selected_valiant.groups.main',
                'emptyOption' => 'profixs.valiants::lang.component.selected_valiant.fields.empty_option',
                'type'        => 'dropdown',
                'options'     =>  $this->getValiantOptions(),
                'span'        => 'left',
            ]
        ];
    }

    /**
     * getvaliantOptions
     */
    public function getValiantOptions()
    {
        return Valiant::isPublished()->limit(500)->get()
            ->mapWithKeys(function ($item) {
            return [$item->id => $item->fullName()];
        })->toArray();
    }

    /**
     * onRun
     */
    public function onRun()
    {
        $this->valiant = $this->loadValiant();
    }

    /**
     * loadvaliant
     */
    public function loadValiant()
    {
        if ($valiant = $this->property('valiant')) {
            return Valiant::find($valiant);
        }
    }
}

