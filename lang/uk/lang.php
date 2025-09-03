<?php

return [
    'plugin' => [
        'name' => 'Герой',
        'description' => 'Управління Героями',
    ],
    'valiant' => [
        'tabs' => [
            'about' => 'Про Героя',
            'links' => 'Посилання',
        ],
        'published' => 'Опубліковано',
        'first_name' => 'Ім\'я',
        'last_name' => 'Прізвище',
        'middle_name' => 'По батькові',
        'bio' => 'Біографія',
        'position' => 'Дата народження - Дата загибелі',
        'groups' => 'Групи',
        'avatar' => 'Фото',
        'links' => [
            'prompt' => 'Додати посилання',
            'field_title' => 'Список посилань',
            'inner_title' => 'Заголовок',
            'inner_url' => 'URL адреса',
            'inner_description' => 'Короткий опис',
            'inner_new_window' => 'Відкрити у новому вікні',
        ],
        'slug' => 'Власне посилання',
        'slug_comment' => 'Залиште пустим для автогенерації',
        'bio_timeline' => [
            'label' => 'Хроніка біографії',
            'prompt' => 'Додати нагороду',
            'form_fields' => [
                'period' => 'Період(Залишити поле пустим!)',
                'description' => 'Нагороди'
            ],
        ],
    ],
    'groups' => [
        'title' => 'Групи',
        'manage' => 'Управління',
        'access' => [
            'groups' => 'Доступ до груп',
            'allow_create' => 'Доступ до створення груп',
            'allow_delete' => 'Доступ до видалення груп'
        ],
    ],
    'valiants' => [
        'title' => 'Герої',
        'new_valiant' => 'Новий Герой',
        'manage' => 'Управління',
        'list' => 'Список Героїв',
        'access' => [
            'tab' => 'Герої',
            'valiants' => 'Доступ та управління Героями',
        ],
    ],
    'group' => [
        'title' => 'Групи',
        'name' => 'Група',
        'description' => 'Опис',
        'order_number' => 'Порядковий номер в списку',
        'priority' => 'Пріоритет',
    ],
    'component' => [
        'solder' => [
            'name' => 'Блок профілю Героїв',
            'description' => 'Відображення блоку профілю Героїв',
        ],
        'valiant_list' => [
            'name' => 'Список Героїв',
            'description' => 'Блок відображення списку Героїв',
            'group_type' => [
                'description' => 'Тип-група',
                'title' => 'Вибір типу групи',
            ],
        ],
        'random_valiants' => [
            'name' => 'Випадкові Герої',
            'description' => 'Компонента призначена для завантаження певної кількості випадкових Героїв',
            'groups' => [
                'main' => 'Головне',
                'filter' => 'Фільтр',
            ],
            'fields' => [
                'count' => 'Кількість',
                'title' => 'Заголовок',
                'description' => 'Опис',
                'without_group' => 'Відбирати серед Героїв без групи',
                'include_groups' => 'Відбирати серед Героїв з наступних груп (залишити пустим для вибору усіх груп):',
            ],
        ],
        'selected_valiant' => [
            'name' => 'Обраний Герой',
            'description' => '',
            'groups' => [
                'main' => 'Головне',
            ],
            'fields' => [
                'valiant' => 'Герой',
                'empty_option' => '--- Оберіть героя ---',
            ],
        ],
    ],

    // new standard
    'system' => [
        'buttons' => [
            'save'    => 'Зберегти',
            'create'  => 'Створити',
            'cancel'  => 'Скасувати',
            'reorder' => 'Відсортувати',
            'preview' => 'Попередній перегляд',
            'save_and_close'   => 'Зберегти і Закрити',
            'delete_selected'  => 'Видалити обране',
            'create_and_close' => 'Створити і Закрити',

            'groups'  => 'Групи',
            'valiants' => 'Герої',

            'new_group'  => 'Нова Група',
            'new_valiant' => 'Нова Герой',

            'reorder_groups' => 'Сортування Груп',
            'reorder_valiants' => 'Сортування Осіб',

            'return_to_groups_list'  => 'Повернутись до списку Груп',
            'return_to_valiants_list' => 'Повернутись до списку Осіб',
        ],
        'labels' => [
            'or' => 'або',

            'group'  => 'Група',
            'valiant' => 'Герой',

            'edit_group'  => 'Редагування Групи',
            'edit_valiant' => 'Редагування Герої',

            'reorder_groups' => 'Сортування Груп',
            'reorder_valiants' => 'Сортування Осіб',

            'create_group'  => 'Створення Групи',
            'create_valiant' => 'Створення Герої',

            'saving_group'  => 'Збереження Групи',
            'saving_valiant' => 'Збереження Герої',

            'preview_group'  => 'Попередній перегляд Групи',
            'preview_valiant' => 'Попередній перегляд Герої',

            'manage_groups'  => 'Керування Групами',
            'manage_valiants' => 'Керування Геройми',

            'creating_group'  => 'Створення Групи',
            'creating_valiant' => 'Створення Герої',

            'deleting_group'  => 'Видалення Групи',
            'deleting_valiant' => 'Видалення Герої',
        ],
        'alerts' => [
            'group_delete_confirm'  => 'Видалити цю Групу?',
            'valiant_delete_confirm' => 'Видалити цю Особу?',

            'groups_delete_confirm'  => 'Ви впевнені, що бажаєте видалити обрані Групи?',
            'valiants_delete_confirm' => 'Ви впевнені, що бажаєте видалити обрані Герої?',
        ],
    ],
];
