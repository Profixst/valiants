<?php namespace ProFixS\Valiants\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Valiants Back-end Controller
 */
class Valiants extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ReorderController',
        'Backend.Behaviors.RelationController',
        'ProFixS.MultiLanguage.Behaviors.MultiLanguageController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('ProFixS.Valiants', 'valiants', 'valiants');
    }

    public function create()
    {
        BackendMenu::setContextSideMenu('new_valiant');

        return parent::create();
    }
}
