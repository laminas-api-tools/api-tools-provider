<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-provider for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-provider/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-provider/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\ApiTools\Provider;

class Module
{
    public function getAutoloaderConfig()
    {
        return array(
            'Laminas\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/',
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
