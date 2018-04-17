<?php

return [
    'method_list' => ['login', 'getMenuList', 'getMenuDetail', 'createMenu', 'updateMenu', 'deleteMenu', 'changePassword'],
    'login' => [
        'params' => [
            'menuname' => 'required',
            'password' => 'required',
            'ref_type' => 'required',
        ],
        'output' => [
            'attributes.menuname'   => 'Menuname',
            'attributes.ref_type'   => 'Reference Type',
            'attributes.ref_id'     => 'Reference ID',
            'attributes.status'     => 'Menu Status',
            'attributes.created_at' => 'Create date time',
            'attributes.updated_at' => 'Update date time',
            'id'                    => 'Menu ID',
        ]
    ],
    'getMenuList' => [
        'params' => [
            'menuname' => 'not required',
            'ref_type' => 'not required',
            'ref_id'   => 'not required',
            'limit'    => 'not required',
            'offset'   => 'not required',
            'order_by' => 'not required (ex => menuname:asc)',
        ],
        'output' => [
            [
                'attributes.menuname'   => 'Menuname',
                'attributes.ref_type'   => 'Reference Type',
                'attributes.ref_id'     => 'Reference ID',
                'attributes.status'     => 'Menu Status',
                'attributes.created_at' => 'Create date time',
                'attributes.updated_at' => 'Update date time',
                'id'                    => 'Menu ID',
            ]
        ]
    ],
    'getMenuList' => [
        'params' => [],
        'output' => [
            'attributes.menuname'   => 'Menuname',
            'attributes.ref_type'   => 'Reference Type',
            'attributes.ref_id'     => 'Reference ID',
            'attributes.status'     => 'Menu Status',
            'attributes.created_at' => 'Create date time',
            'attributes.updated_at' => 'Update date time',
            'id'                    => 'Menu ID',
        ]
    ],
    'createMenu' => [
        'params' => [
            'menuname' => 'required',
            'password' => 'required',
            'ref_type' => 'required',
            'status'   => 'required (active/inactive)',
        ],
        'output' => [
            'attributes.menuname'   => 'Menuname',
            'attributes.password'   => 'Password',
            'attributes.ref_type'   => 'Reference Type',
            'attributes.ref_id'     => 'Reference ID',
            'attributes.created_at' => 'Create date time',
            'attributes.updated_at' => 'Update date time',
            'id'                    => 'Menu ID',
        ]
    ],
    'updateMenu' => [
        'params' => [
            'id'       => 'required'
        ],
        'output' => [
            'attributes.menuname'   => 'Menuname',
            'attributes.password'   => 'Password',
            'attributes.ref_type'   => 'Reference Type',
            'attributes.ref_id'     => 'Reference ID',
            'attributes.created_at' => 'Create date time',
            'attributes.updated_at' => 'Update date time',
            'id'                    => 'Menu ID',
        ]
    ],
    'deleteMenu' => [
        'params' => [
            'id'       => 'required'
        ],
        'output' => [
            'attributes.menuname'   => 'Menuname',
            'attributes.password'   => 'Password',
            'attributes.ref_type'   => 'Reference Type',
            'attributes.ref_id'     => 'Reference ID',
            'attributes.created_at' => 'Create date time',
            'attributes.updated_at' => 'Update date time',
            'id'                    => 'Menu ID',
        ]
    ],
    'changePassword' => [
        'params' => [
            'old' => 'required',
            'new' => 'required',
        ],
        'output' => [
            'attributes.menuname'   => 'Menuname',
            'attributes.password'   => 'Password',
            'attributes.ref_type'   => 'Reference Type',
            'attributes.ref_id'     => 'Reference ID',
            'attributes.created_at' => 'Create date time',
            'attributes.updated_at' => 'Update date time',
            'id'                    => 'Menu ID',
        ]
    ],
    'configs' => [
        'menu' => [
            'url'             => 'http://ms-menu-api.develop/',
            'login'           => 'menus/login',
            'list'            => 'menus',
            'detail'          => 'menus/[id]',
            'create'          => 'menus',
            'update'          => 'menus/[id]',
            'delete'          => 'menus/[id]',
            'change_password' => 'menus/[id]/change/password',
        ],
    ]
];