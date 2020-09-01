<?php
namespace PHPContracts\oauth2\server\factory;

use PHPContracts\oauth2\server\entity\RequestEntityInterface;
use PHPContracts\oauth2\server\entity\ClientEntityInterface;
use PHPContracts\oauth2\server\entity\UserEntityInterface;
use PHPContracts\oauth2\server\entity\AuthCodeEntityInterface;

interface AuthCodeFactoryInterface
{
    public function newAuthCode(RequestEntityInterface $requestEntity, UserEntityInterface $userEntity, ClientEntityInterface $clientEntity):AuthCodeEntityInterface;
}