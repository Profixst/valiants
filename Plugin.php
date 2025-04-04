<?php namespace ProFixS\Valiants;

use App;
use Backend;
use System\Classes\PluginBase;

/**
 * Valiants Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = [
        'ProFixS.Core',
        'ProFixS.MultiLanguage'
    ];
    /**
     *  about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'profixs.valiants::lang.plugin.name',
            'description' => 'profixs.valiants::lang.plugin.description',
            'author' => 'ProFixS',
            'icon' => 'icon-male'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {

    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        
    }


    public function registerComponents()
    {
        

        return [
            'ProFixS\Valiants\Components\ValiantsList' => 'valiantsList',
            'ProFixS\Valiants\Components\ValiantsListByGroups' => 'valiantsListByGroups',
            'ProFixS\Valiants\Components\Solder' => 'solder',
            'ProFixS\Valiants\Components\Valiants' => 'valiants',
            'ProFixS\Valiants\Components\RandomValiants' => 'randomvaliants',
            'ProFixS\Valiants\Components\SelectedValiant' => 'selectedValiant'
        ];
    }


    public function registerPermissions()
    {
        return [
            'profixs.valiants.groups' => [
                'tab' => 'profixs.valiants::lang.valiants.access.tab',
                'label' => 'profixs.valiants::lang.groups.access.groups'
            ],
            'profixs.valiants.groups.allow_delete' => [
                'tab' => 'profixs.valiants::lang.valiants.access.tab',
                'label' => 'profixs.valiants::lang.groups.access.allow_delete'
            ],
            'profixs.valiants.groups.allow_create' => [
                'tab' => 'profixs.valiants::lang.valiants.access.tab',
                'label' => 'profixs.valiants::lang.groups.access.allow_create'
            ],
            'profixs.valiants.valiants' => [
                'tab' => 'profixs.valiants::lang.valiants.access.tab',
                'label' => 'profixs.valiants::lang.valiants.access.valiants'
            ],
        ];
    }


    public function registerNavigation()
    {
        return [
            'valiants' => [
                'label' => 'profixs.valiants::lang.valiants.list',
                'url' => Backend::url('profixs/valiants/valiants'),
                'icon' => 'icon-male',
                'permissions' => ['profixs.valiants.*'],
                'order' => 500,
                'sideMenu' => [
                    'new_valiant' => [
                        'label' => 'profixs.valiants::lang.valiants.new_valiant',
                        'icon' => 'icon-user-plus',
                        'url' => Backend::url('profixs/valiants/valiants/create'),
                        'permissions' => ['profixs.valiants.valiants'],
                    ],
                    'valiants' => [
                        'label' => 'profixs.valiants::lang.valiants.list',
                        'icon' => 'icon-male',
                        'url' => Backend::url('profixs/valiants/valiants'),
                        'permissions' => ['profixs.valiants.valiants'],
                    ],
                    'groups' => [
                        'label' => 'profixs.valiants::lang.groups.title',
                        'icon' => 'icon-male',
                        'url' => Backend::url('profixs/valiants/groups'),
                        'permissions' => ['profixs.valiants.groups']
                    ]
                ],
           ],
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'valiantLink' => ['ProFixS\Valiants\Twig\Functions', 'valiantLink'],
                'getValiant' => ['ProFixS\Valiants\Twig\Functions', 'getValiant']
            ]
        ];
    }
}
