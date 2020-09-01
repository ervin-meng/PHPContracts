<?php
namespace PHPContracts\oauth2\server;

use PHPContracts\oauth2\server\entity\RequestEntityInterface;
use PHPContracts\oauth2\server\repository\ClientRepositoryInterface;
use PHPContracts\oauth2\server\repository\UserRepositoryInterface;
use PHPContracts\oauth2\server\repository\AuthCodeRepositoryInterface;
use PHPContracts\oauth2\server\repository\AccessTokenRepositoryInterface;
use PHPContracts\oauth2\server\repository\RefreshTokenRepositoryInterface;
use PHPContracts\oauth2\server\factory\AuthCodeFactoryInterface;
use PHPContracts\oauth2\server\factory\AccessTokenFactoryInterface;
use PHPContracts\oauth2\server\factory\RefreshTokenFactoryInterface;
use PHPContracts\oauth2\server\repository\UserThirdPartyRepositoryInterface;

interface ServerInterface
{
    /**
     * @param  array  $scopeSet
     * @param  int    $userId
     * @return string
     */
    public function handleAuthorizationRequest(array $scopeSet, int $userId):string;

    /**
     * @return array
     */
    public function handleTokenRequest():array;

    /**
     * @return ClientRepositoryInterface
     */
    public function getClientRepository():ClientRepositoryInterface;

    /**
     * @return AuthCodeRepositoryInterface
     */
    public function getAuthCodeRepository():AuthCodeRepositoryInterface;

    /**
     * @return AccessTokenRepositoryInterface
     */
    public function getAccessTokenRepository():AccessTokenRepositoryInterface;


    /**
     * @return RefreshTokenRepositoryInterface
     */
    public function getRefreshTokenRepository():RefreshTokenRepositoryInterface;

    /**
     * @return UserRepositoryInterface
     */
    public function getUserRepository():UserRepositoryInterface;

    /**
     * @return UserThirdPartyRepositoryInterface
     */
    public function getUserThirdPartyRepository():UserThirdPartyRepositoryInterface;

    /**
     * @return RequestEntityInterface
     */
    public function getRequestEntity():RequestEntityInterface;

    /**
     * @return AuthCodeFactoryInterface
     */
    public function getAuthCodeFactory():AuthCodeFactoryInterface;

    /**
     * @return AccessTokenFactoryInterface
     */
    public function getAccessTokenFactory():AccessTokenFactoryInterface;

    /**
     * @return RefreshTokenFactoryInterface
     */
    public function getRefreshTokenFactory():RefreshTokenFactoryInterface;

    /**
     * @return string
     */
    public function getDefaultScope():string;
}
