<?php
namespace ResourceCatalog\Model;

interface IUserGroupIdentify
{
    const IDENTIFY = array(
        IUserGroup::ID['NULL'] => 'NULL',
        IUserGroup::ID['FGW'] => 'FGW',
    );
}
