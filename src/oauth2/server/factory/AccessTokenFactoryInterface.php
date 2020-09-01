<?php
namespace PHPContracts\oauth2\server\factory;

use PHPContracts\oauth2\server\entity\RefreshTokenEntityInterface;
use PHPContracts\oauth2\server\entity\RequestEntityInterface;
use PHPContracts\oauth2\server\entity\ClientEntityInterface;
use PHPContracts\oauth2\server\entity\UserEntityInterface;
use PHPContracts\oauth2\server\entity\AccessTokenEntityInterface;

interface AccessTokenFactoryInterface
{
    public function newAccessToken(
        RequestEntityInterface $requestEntity,
        UserEntityInterface $userEntity,
        ClientEntityInterface $clientEntity,
        RefreshTokenEntityInterface $refreshTokenEntity):AccessTokenEntityInterface;
}