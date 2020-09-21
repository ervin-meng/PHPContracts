<?php
namespace PHPContracts\oauth2\server\entity;

interface RequestEntityInterface
{
    public function getGrantType();
    public function getUserName();
    public function getPassword();
    public function getAppId();
    public function getAppSecret();
    public function getResponseType();
    public function getRedirectUri();
    public function setScope($scope);
    public function getScope();
    public function getCode();
    public function getState();
    public function getRefreshToken();
    public function getThirdParty();
    public function getOpenId();
    public function getUnionId();
    public function getMac();
}