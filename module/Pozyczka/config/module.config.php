<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
return array(
    'service_manager' => array(
        'factories' => array(
            'pozyczka_repository'  => 'Pozyczka\Infrastructure\Service\PozyczkaRepositoryFactory',
        ),
    ),
    'doctrine' => array(
        'configuration' => array(
            'orm_default' => array(

            ),
        ),
        'driver' => array(
            'cargo_backend_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'cache' => 'array',
                'paths' => array(
                    dirname(__DIR__) . '/src/Pozyczka/Infrastructure/Persistence/Doctrine/ORM'
                )
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Pozyczka' => 'cargo_backend_driver',
                )
            )
        )
    ),
);
