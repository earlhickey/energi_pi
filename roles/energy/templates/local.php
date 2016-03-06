<?php

return array(
    'phpSettings' => array(
        'display_startup_errors' => true,
        'display_errors' => true,
        'max_execution_time' => 60,
        'date.timezone' => 'Europe/Amsterdam',
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => function ($sm) {
                return new Zend\Db\Adapter\Adapter(array(
                    'driver' => 'Pdo_Sqlite',
                    'database' => '/home/{{ pi_user }}/{{ energy_db }}'
                ));
            },
        ),
    ),
);
