<?php
namespace PHPContracts\oauth2\server\repository;

use PHPContracts\oauth2\server\entity\UserEntityInterface;

interface UserRepositoryInterface
{
    public function getByNameAndPassword(string $userName, string $userPassword):UserEntityInterface;
    public function getByUserId($userId):?UserEntityInterface;
}
