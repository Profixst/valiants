<?php

return [
    'plugin' => [
        'name' => 'valiant',
        'description' => 'Manage valiants',
    ],
    'valiant' => [
        'tabs' => [
            'about' => 'About valiant',
            'links' => 'Links',
        ],
        'published' => 'Published',
        'first_name' => 'First name',
        'last_name' => 'Last name',
        'middle_name' => 'Middle name',
        'bio' => 'Biography',
        'position' => 'Position',
        'groups' => 'Groups',
        'avatar' => 'Photo',
        'links' => [
            'prompt' => 'Додати посилання',
            'field_title' => 'Links content',
            'inner_title' => 'Link title',
            'inner_url' => 'URL',
            'inner_description' => 'Description',
            'inner_new_window' => 'Open in new window',
        ],
        'slug' => 'Self url',
        'slug_comment' => 'Autogenerate if empty',
        'bio_timeline' => [
            'label' => 'Chronicle biography',
            'prompt' => 'Add period',
            'form_fields' => [
                'period' => 'Period',
                'description' => 'Period description'
            ],
        ],
    ],
    'groups' => [
        'title' => 'Groups',
        'manage' => 'Manage',
        'access' => [
            'title' => 'Access title',
            'groups' => 'Access groups',
            'allow_create' => 'Access to create groups',
            'allow_delete' => 'Access to delete groups'
        ],
    ],
    'valiants' => [
        'title' => 'valiants',
        'new_valiant' => 'New valiant',
        'manage' => 'Manage',
        'list' => 'valiants list',
        'access' => [
            'tab' => 'valiants',
            'valiants' => 'Manage valiants',
        ],
    ],
    'group' => [
        'name' => 'Group',
        'description' => 'Description',
        'order_number' => 'In order',
        'priority' => 'Priority',
    ],
    'component' => [
        'solder' => [
            'name' => 'Solder block',
            'description' => 'Block that show solder info',
        ],
        'valiant_list' => [
            'name' => 'valiants list',
            'description' => 'Block that render list of solders',
            'group_type' => [
                'description' => 'Type of group',
                'title' => 'Group type',
            ],
        ],
        'random_valiants' => [
            'name' => 'Random valiants',
            'description' => 'The component is intended to load a certain number of random valiants',
            'groups' => [
                'main' => 'Main',
                'filter' => 'Filter',
            ],
            'fields' => [
                'count' => 'Count',
                'title' => 'Title',
                'description' => 'Description',
                'without_group' => 'Select among people without a group',
                'include_groups' => 'Select among the following groups (leave empty to select all groups):',
            ],
        ],
        'selected_valiant' => [
            'name' => 'Selected valiant',
            'description' => '',
            'groups' => [
                'main' => 'Main',
            ],
            'fields' => [
                'valiant' => 'valiant',
                'empty_option' => '--- Select a valiant ---',
            ],
        ],
    ],

    // new standard
    'system' => [
        'buttons' => [
            'save'    => 'Save',
            'create'  => 'Create',
            'cancel'  => 'Cancel',
            'reorder' => 'Reorder',
            'preview' => 'Preview',
            'save_and_close'   => 'Save and Close',
            'delete_selected'  => 'Delete selected',
            'create_and_close' => 'Create and Close',

            'groups'  => 'Groups',
            'valiants' => 'valiants',

            'new_group'  => 'New Group',
            'new_valiant' => 'New valiant',

            'reorder_groups' => 'Sorting Groups',
            'reorder_valiant' => 'Sorting valiants',

            'return_to_groups_list'  => 'Return to Groups list',
            'return_to_valiants_list' => 'Return to valiants list',
        ],
        'labels' => [
            'or' => 'or',

            'group'  => 'Group',
            'valiant' => 'valiant',

            'edit_group'  => 'Edit Group',
            'edit_valiant' => 'Edit valiant',

            'reorder_groups' => 'Sorting Groups',
            'reorder_valiant' => 'Sorting valiants',

            'create_group'  => 'Create Group',
            'create_valiant' => 'Create valiant',

            'saving_group'  => 'Saving Group',
            'saving_valiant' => 'Saving valiant',

            'preview_group'  => 'Preview Group',
            'preview_valiant' => 'Preview valiant',

            'manage_groups'  => 'Manage Groups',
            'manage_valiants' => 'Manage valiants',

            'creating_group'  => 'Creating Group',
            'creating_valiant' => 'Creating valiant',

            'deleting_group'  => 'Deleting Group',
            'deleting_valiant' => 'Deleting valiant',
        ],
        'alerts' => [
            'group_delete_confirm'  => 'Delete this Group?',
            'valiant_delete_confirm' => 'Delete this valiant?',

            'groups_delete_confirm'  => 'Are you sure you want to delete the selected Groups?',
            'valiants_delete_confirm' => 'Are you sure you want to delete the selected valiants?',
        ],
    ],
];
