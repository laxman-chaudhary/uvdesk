<?php

namespace ContainerYisTH3T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUvdesk_Core_EventDispatcherService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'uvdesk.core.event_dispatcher' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Framework\EventDispatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Framework/EventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/mailbox-component/EventListener/Swiftmailer.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/SwiftMailer/SwiftMailer.php';

        $a = ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        $container->services['uvdesk.core.event_dispatcher'] = $instance = new \Webkul\UVDesk\CoreFrameworkBundle\Framework\EventDispatcher($container, $a);

        $instance->addEventListener(new \Webkul\UVDesk\MailboxBundle\EventListener\Swiftmailer($container, $a, ($container->services['swiftmailer.service'] ?? ($container->services['swiftmailer.service'] = new \Webkul\UVDesk\CoreFrameworkBundle\SwiftMailer\SwiftMailer($container))), ($container->privates['Webkul\\UVDesk\\MailboxBundle\\Services\\MailboxService'] ?? $container->load('getMailboxServiceService'))), [0 => ['event' => 'swiftmailer.configuration.updated', 'method' => 'onSwiftMailerConfigurationUpdated'], 1 => ['event' => 'swiftmailer.configuration.removed', 'method' => 'onSwiftMailerConfigurationRemoved']]);

        return $instance;
    }
}