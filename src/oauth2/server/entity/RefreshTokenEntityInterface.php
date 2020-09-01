<?php
namespace PHPContracts\oauth2\server\entity;

interface RefreshTokenEntityInterface
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
    public function getExpireIn();
    public function setCreateTime(int $timestamp);
    public function getCreateTime();
    public function setRefreshToken(string $token);
    public function getRefreshToken();
    public function setAccessTokenId($tokenId);
    public function getAccessTokenId();

}