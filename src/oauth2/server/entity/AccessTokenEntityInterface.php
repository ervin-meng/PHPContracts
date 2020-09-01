<?php
namespace PHPContracts\oauth2\server\entity;

interface AccessTokenEntityInterface
{
    public function setClientId($clientId);
    public function getClientId();
    public function setUserId($userId);
    public function getUserId();
    public function setScope(string $scope);
    public function getScope();
    public function setMac(string $mac);
    public function getMac();
    public function setExpireIn(int $expireIn);
    public function getExpireIn():int;
    public function setCreateTime(int $timestamp);
    public function getCreateTime():int;
    public function setAccessToken(string $token);
    public function getAccessToken();
    public function setId($tokenId);
    public function getId();

}