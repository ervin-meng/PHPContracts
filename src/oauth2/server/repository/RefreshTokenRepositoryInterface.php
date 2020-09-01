<?php
namespace PHPContracts\oauth2\server\repository;

use PHPContracts\oauth2\server\entity\RefreshTokenEntityInterface;

interface RefreshTokenRepositoryInterface
{
    public function add(RefreshTokenEntityInterface $refreshTokenEntity);
    public function remove(RefreshTokenEntityInterface $refreshTokenEntity);
    public function getByToken(string $token):?RefreshTokenEntityInterface;
}