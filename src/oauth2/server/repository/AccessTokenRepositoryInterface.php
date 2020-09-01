<?php
namespace PHPContracts\oauth2\server\repository;

use PHPContracts\oauth2\server\entity\AccessTokenEntityInterface;

interface AccessTokenRepositoryInterface
{
    public function add(AccessTokenEntityInterface $accessTokenEntity);
    public function removeById($id);
    public function getByToken(string $token):?AccessTokenEntityInterface;
}
