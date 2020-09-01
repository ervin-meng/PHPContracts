<?php
namespace PHPContracts\oauth2\client;

interface ClientInterface
{
    /**
     * @param  string $appId
     * @param  string $redirectUrl
     * @param  string $responseType
     * @param  string $scope
     * @param  string $state
     * @return mixed
     */
    public function sendAuthorizationRequest(string $appId, string $redirectUrl = '', string $responseType = 'code', string $scope = '', string $state = '');

    /**
     * @param string $appId
     * @param string $appSecret
     * @param string $authorizationCode
     * @param string $grantType
     * @return mixed
     */
    public function sendTokenRequest(string $appId, string $appSecret, string $authorizationCode, string $grantType);
}
