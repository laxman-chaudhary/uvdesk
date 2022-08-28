<?php

namespace Container18Ja2sV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_TwigService extends App_KernelProductionDebugContainer
{
    /**
     * Gets the public '.container.private.twig' shared service.
     *
     * @return \Twig\Environment
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Cache/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Cache/FilesystemCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/CoreExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/EscaperExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/OptimizerExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/StagingExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/ExtensionSet.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Template.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/TemplateWrapper.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Environment.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ProfilerExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Profiler/Profile.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/UrlHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/SerializerExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Impersonate/ImpersonateUrlGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/src/Twig/Extension/PaginationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/src/Helper/Processor.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/DebugExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/AppVariable.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/extra-bundle/MissingExtensionSuggestor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';

        $container->services['.container.private.twig'] = $instance = new \Twig\Environment(($container->services['uvdesk_extension.twig_loader'] ?? $container->load('getUvdeskExtension_TwigLoaderService')), ['debug' => true, 'strict_variables' => true, 'autoescape' => 'name', 'cache' => ($container->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $a = ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $b = ($container->services['translator'] ?? $container->load('getTranslatorService'));
        $c = ($container->services['router'] ?? $container->getRouterService());
        $d = ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $e = ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService());
        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('production');
        $f->setDebug(true);
        if ($container->has('.container.private.security.token_storage')) {
            $f->setTokenStorage($e);
        }
        if ($container->has('request_stack')) {
            $f->setRequestStack($d);
        }
        $g = new \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor();

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(new \Twig\Profiler\Profile(), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(($container->services['uvdesk_extension.assets_manager'] ?? $container->load('getUvdeskExtension_AssetsManagerService'))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($container->privates['debug.file_link_formatter'] ?? ($container->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($d, ($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SerializerExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($container->privates['security.logout_url_generator'] ?? $container->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($container->services['.container.private.security.authorization_checker'] ?? $container->get_Container_Private_Security_AuthorizationCheckerService()), new \Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator($d, ($container->privates['security.firewall.map'] ?? $container->getSecurity_Firewall_MapService()), $e)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension(new \Knp\Bundle\PaginatorBundle\Helper\Processor($c, $b)));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', true],
            'Symfony\\Bridge\\Twig\\Extension\\SerializerRuntime' => ['privates', 'twig.runtime.serializer', 'getTwig_Runtime_SerializerService', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', true],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\SerializerRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        $instance->addGlobal('default_agent_image_path', 'bundles/uvdeskcoreframework/images/uv-avatar-batman.png');
        $instance->addGlobal('default_customer_image_path', 'bundles/uvdeskcoreframework/images/uv-avatar-ironman.png');
        $instance->addGlobal('default_helpdesk_image_path', 'bundles/uvdeskcoreframework/images/uv-avatar-uvdesk.png');
        $instance->addGlobal('max_post_size', 8388608);
        $instance->addGlobal('max_file_uploads', 20);
        $instance->addGlobal('upload_max_filesize', 2097152);
        $instance->addGlobal('user_service', ($container->services['user.service'] ?? $container->load('getUser_ServiceService')));
        $instance->addGlobal('uvdesk_service', ($container->services['uvdesk.service'] ?? $container->load('getUvdesk_ServiceService')));
        $instance->addGlobal('recaptcha_service', ($container->services['recaptcha.service'] ?? $container->load('getRecaptcha_ServiceService')));
        $instance->addGlobal('ticket_service', ($container->services['ticket.service'] ?? $container->load('getTicket_ServiceService')));
        $instance->addGlobal('csrf_token_generator', ($container->services['.container.private.security.csrf.token_manager'] ?? $container->load('get_Container_Private_Security_Csrf_TokenManagerService')));
        $instance->addGlobal('email_service', ($container->services['email.service'] ?? $container->load('getEmail_ServiceService')));
        $instance->addGlobal('uvdesk_extensibles', ($container->services['uvdesk.extensibles'] ?? $container->load('getUvdesk_ExtensiblesService')));
        $instance->addGlobal('uvdesk_core_file_system', ($container->services['uvdesk.core.file_system.service'] ?? $container->load('getUvdesk_Core_FileSystem_ServiceService')));
        $instance->addGlobal('uvdesk_automations', ($container->services['uvdesk.automations'] ?? $container->load('getUvdesk_AutomationsService')));
        $instance->registerUndefinedFilterCallback([0 => $g, 1 => 'suggestFilter']);
        $instance->registerUndefinedFunctionCallback([0 => $g, 1 => 'suggestFunction']);
        $instance->registerUndefinedTokenParserCallback([0 => $g, 1 => 'suggestTag']);
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }
}