<?php
namespace Company\ModuleName;

return [
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../template',
        ],
        'controller_map'      => [
            __NAMESPACE__ => 'modulename'
        ],
    ],
    'view_helpers' => [
        'invokables' => [
            'mySuperHelper' => View\MyHelper::class,
        ],
    ],
];
