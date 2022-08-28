<?php

namespace Container18Ja2sV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecaptcha_ServiceService extends App_KernelProductionDebugContainer
{
    /**
     * Gets the public 'recaptcha.service' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Services\ReCaptchaService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Services/ReCaptchaService.php';

        return $container->services['recaptcha.service'] = new \Webkul\UVDesk\CoreFrameworkBundle\Services\ReCaptchaService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $container);
    }
}