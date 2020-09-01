<?php
namespace PHPContracts\oauth2\server\entity;

interface AuthCodeEntityInterface
{
    public function setCode(string $code);
    public function getCode();
    public function setUserId($userId);
    public function getUserId();
    public function setClientId($clientId);
    public function getClientId();
    public function setScope(string $scope);
    public function getScope();
    public function setExpireIn(int $expireIn);
    public function getExpireIn();
    public function setExpireAt(int $expireAt);
    public function getExpireAt();
}