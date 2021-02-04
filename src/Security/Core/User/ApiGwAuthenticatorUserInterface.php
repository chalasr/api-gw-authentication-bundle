<?php

declare(strict_types=1);

namespace EcPhp\ApiGwAuthenticatorBundle\Security\Core\User;

use Symfony\Component\Security\Core\User\UserInterface;

interface ApiGwAuthenticatorUserInterface extends UserInterface
{
    /**
     * @param mixed $default
     *
     * @return mixed|null
     */
    public function get(string $key, $default = null);

    /**
     * @param mixed $default
     *
     * @return mixed
     */
    public function getAttribute(string $key, $default = null);

    /**
     * @return array<array|string>
     */
    public function getAttributes(): array;
}