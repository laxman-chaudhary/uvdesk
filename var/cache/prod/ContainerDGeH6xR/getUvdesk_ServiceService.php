<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUvdesk_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the public 'uvdesk.service' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Services\UVDeskService
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['uvdesk.service'] = new \Webkul\UVDesk\CoreFrameworkBundle\Services\UVDeskService($container, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}