<?php
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\\DBAL\\Driver\\PDOPgSql\\Driver',
                'params' => array(
                    'host'     => '10.4.2.209',
                    'port'     => '5432',
                    'user'     => 'usr_viter',
                    'password' => 'viter_usr',
                    'dbname'   => 'VITER',
                ),
            ),
        ),
    ),
);
