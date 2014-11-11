<?php
namespace Company\ModuleName;

return [
    'doctrine'     => [
        'driver' => [
            'zfcuser_entity' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => [__DIR__ . '/../code/Entity']
            ],
            'orm_default'    => [
                'drivers' => [
                    __NAMESPACE__ . '\Entity' => 'myentity',
                ]
            ]
        ]
    ],
    'application_manager' => [
        'module_paths_migration' => [
            __NAMESPACE__ => __DIR__ . '/../migration'
        ],
    ],
    'asset_manager' => [
        'resolver_configs' => [
            'paths' => [
                __DIR__ . '/../public',
            ],
        ],
    ],
    'translator' => [
        'translation_file_patterns' => [
            [
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ],
        ],
    ],
];
