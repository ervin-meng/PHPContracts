<?php
namespace PHPContracts\oauth2\server\factory;

use PHPContracts\oauth2\server\entity\AccessTokenEntityInterface;
use PHPContracts\oauth2\server\entity\RequestEntityInterface;
use PHPContracts\oauth2\server\entity\ClientEntityInterface;
use PHPContracts\oauth2\server\entity\UserEntityInterface;
use PHPContracts\oauth2\server\entity\RefreshTokenEntityInterface;

interface RefreshTokenFactoryInterface
{
    public function newRefreshToken(RequestEntityInterface $requestEntity, AccessTokenEntityInterface $accessTokenEntity, UserEntityInterface $userEntity, ClientEntityInterface $clientEntity):RefreshTokenEntityInterface;
}