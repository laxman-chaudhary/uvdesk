<?php

namespace ContainerYisTH3T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerXHRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Webkul\UVDesk\CoreFrameworkBundle\Controller\CustomerXHR' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Controller\CustomerXHR
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/CustomerXHR.php';

        $container->services['Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR'] = $instance = new \Webkul\UVDesk\CoreFrameworkBundle\Controller\CustomerXHR(($container->services['user.service'] ?? $container->getUser_ServiceService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['translator'] ?? $container->getTranslatorService()));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR', $container));

        return $instance;
    }
}