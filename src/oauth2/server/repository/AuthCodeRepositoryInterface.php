<?php
namespace PHPContracts\oauth2\server\repository;

use PHPContracts\oauth2\server\entity\AuthCodeEntityInterface;

interface AuthCodeRepositoryInterface
{
    public function add(AuthCodeEntityInterface $authCodeEntity);
    public function remove(AuthCodeEntityInterface $authCodeEntity);
    public function getByCode(string $code):?AuthCodeEntityInterface;
}
