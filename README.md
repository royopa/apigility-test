My Tests Using Apigility Framework
==================================

My tests using [Apigility Framework](https://apigility.org/)

Installing
---
  
With [composer](https://getcomposer.org/) already installed I used the commands below:

```
  git clone https://github.com/royopa/apigility-test.git
  
  cd apigility-test
  
  composer install
```

Put the application in development mode
----

After install you need put the application in development mode with the command:

```
  cd path/to/install
  
  php public/index.php development enable # put the skeleton in development mode
```

Config Doctrine ORM Module
----

## Entities settings

To register your entities with the ORM, add following metadata driver configurations to your module (merged)
configuration for each of your entities namespaces:

```php
<?php
return array(
    'doctrine' => array(
        'driver' => array(
            // defines an annotation driver with two paths, and names it `my_annotation_driver`
            'my_annotation_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(
                    'path/to/my/entities',
                    'another/path'
                ),
            ),

            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
            'orm_default' => array(
                'drivers' => array(
                    // register `my_annotation_driver` for any entity under namespace `My\Namespace`
                    'My\Namespace' => 'my_annotation_driver'
                )
            )
        )
    )
);
```

## Connection settings

Connection parameters can be defined in the application configuration:

```php
<?php
return array(
    'doctrine' => array(
        'connection' => array(
            // default connection name
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => 'localhost',
                    'port'     => '3306',
                    'user'     => 'username',
                    'password' => 'password',
                    'dbname'   => 'database',
                )
            )
        )
    ),
);
```

Testing the application
----

Use the built in PHP server to put the application online

```
  cd path/to/install
  
  php -S 0.0.0.0:8888 -t public public/index.php
```

So I can visit the site at [http://localhost:8888/](http://localhost:8888/) - which will bring up a welcome page and the ability to visit the dashboard in order to create and inspect my APIs.
