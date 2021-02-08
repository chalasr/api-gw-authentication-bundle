<?php

declare(strict_types=1);

use EcPhp\ApiGwAuthenticatorBundle\Controller\Token;
use EcPhp\ApiGwAuthenticatorBundle\Controller\User;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routes) {
    $routes
        ->add('api_gw_authenticator_bundle_user', '/user')
        ->controller(User::class);

    $routes
        ->add('api_gw_authenticator_bundle_token', '/token')
        ->controller(Token::class);

    $routes
        ->add('api_gw_authenticator_bundle_login_check', '/login_check');
};
