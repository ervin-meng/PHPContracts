<?php
namespace PHPContracts\oauth2\server\entity;

interface ClientEntityInterface
{
    public function validateGrantType(string $grantType);
    public function validateRedirectUri(string $redirectUri);
    public function validateScope(string $scope);
    public function validateSecret(string $appSecret);
    public function setRedirectUri(string $redirectUri);
    public function getRedirectUri();
    public function setGrantType(string $grant);
    public function getGrantType();
    public function setSecret(string $secret);
    public function getSecret();
    public function setScope(string $scope);
    public function getScope();
}