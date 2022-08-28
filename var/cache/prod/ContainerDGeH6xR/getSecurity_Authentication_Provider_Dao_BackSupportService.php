<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Provider_Dao_BackSupportService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authentication.provider.dao.back_support' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.provider.dao.back_support" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.provider.dao.back_support" service is deprecated, use the new authenticator system instead.');

        return $container->privates['security.authentication.provider.dao.back_support'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($container->services['user.provider'] ?? $container->load('getUser_ProviderService')), ($container->privates['security.user_checker'] ?? ($container->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\InMemoryUserChecker())), 'back_support', ($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')), true);
    }
}