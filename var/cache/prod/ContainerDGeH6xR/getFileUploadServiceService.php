<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileUploadServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Webkul\UVDesk\CoreFrameworkBundle\Services\FileUploadService' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Services\FileUploadService
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Webkul\\UVDesk\\CoreFrameworkBundle\\Services\\FileUploadService'] = new \Webkul\UVDesk\CoreFrameworkBundle\Services\FileUploadService($container, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}