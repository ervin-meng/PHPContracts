<?php
namespace PHPContracts\oauth2\server\repository;

use PHPContracts\oauth2\server\entity\ClientEntityInterface;

interface ClientRepositoryInterface
{
    /**
     * @param  string $clientId
     * @return ClientEntityInterface
     */
    public function getByClientId(string $clientId) :?ClientEntityInterface;
}