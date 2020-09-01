<?php
namespace PHPContracts\oauth2\server\repository;

use PHPContracts\oauth2\server\entity\UserThirdPartyEntityInterface;

interface UserThirdPartyRepositoryInterface
{
    public function getByUnionId($platform, $unionId):?UserThirdPartyEntityInterface;
}
