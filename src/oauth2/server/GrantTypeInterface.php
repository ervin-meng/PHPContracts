<?php
namespace PHPContracts\oauth2\server;

use PHPContracts\oauth2\server\entity\UserEntityInterface;
use PHPContracts\oauth2\server\entity\ClientEntityInterface;

interface GrantTypeInterface
{
    public function handleAuthorizationRequest(ServerInterface $OAuth2Server, UserEntityInterface $userEntity, ClientEntityInterface $clientEntity);
    public function handleTokenRequest(ServerInterface $OAuth2Server, ClientEntityInterface $clientEntity);
}