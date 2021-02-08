<?php

declare(strict_types=1);

namespace EcPhp\ApiGwAuthenticatorBundle\Controller;

use EcPhp\ApiGwAuthenticatorBundle\Security\Core\User\ApiGwAuthenticatorUserInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;

final class User
{
    public function __invoke(Security $security): JsonResponse
    {
        $user = $security->getUser();

        if ($user instanceof ApiGwAuthenticatorUserInterface) {
            return new JsonResponse($user->getAttributes());
        }

        return new JsonResponse([]);
    }
}
