<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'TEST' => 500,
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['SFGW'] => array(),
        IUserGroup::ID['SJWJW'] => array(),
        IUserGroup::ID['SWZZB'] => array(),
        IUserGroup::ID['SXCB'] => array(),
        IUserGroup::ID['SZFB'] => array(),
        IUserGroup::ID['SRMYH'] => array(),
        IUserGroup::ID['SSCJDGLJ'] => array(),
        IUserGroup::ID['SSWJ'] => array(),
        IUserGroup::ID['SRSJ'] => array(),
        IUserGroup::ID['SHBJ'] => array(),
        IUserGroup::ID['SFY'] => array(),
        IUserGroup::ID['SJTJ'] => array(),
        IUserGroup::ID['SWJ'] => array(),
        IUserGroup::ID['SMZWYH'] => array(),
        IUserGroup::ID['SJCY'] => array(),
        IUserGroup::ID['SYBJ'] => array(),
        IUserGroup::ID['SGYHXXHJ'] => array(),
        IUserGroup::ID['SYJGLJ'] => array(),
        IUserGroup::ID['SZRZYJ'] => array(),
        IUserGroup::ID['SGAJ'] => array(),
        IUserGroup::ID['SJYJ'] => array(),
        IUserGroup::ID['SJNHG'] => array(),
        IUserGroup::ID['SYLJ'] => array(),
        IUserGroup::ID['SWSJKW'] => array(),
        IUserGroup::ID['SJRB'] => array(),
        IUserGroup::ID['SNMJ'] => array(),
        IUserGroup::ID['SZWFWJ'] => array(),
        IUserGroup::ID['STJJ'] => array(),
        IUserGroup::ID['SKJJ'] => array(),
        IUserGroup::ID['SMZJ'] => array(),
        IUserGroup::ID['SSFJ'] => array(),
        IUserGroup::ID['SSLJ'] => array(),
        IUserGroup::ID['SZJJ'] => array(),
        IUserGroup::ID['SZGH'] => array(),
        IUserGroup::ID['SWMB'] => array(),
        IUserGroup::ID['SCZJ'] => array(),
        IUserGroup::ID['SGSL'] => array(),
        IUserGroup::ID['SWHTYJ'] => array(),
        IUserGroup::ID['SLCJ'] => array(),
        IUserGroup::ID['SGGZYJYZX'] => array(),
        IUserGroup::ID['SYZGLJ'] => array(),
        IUserGroup::ID['SXFJYZD'] => array(),
        IUserGroup::ID['SSJJ'] => array(),
        IUserGroup::ID['SGBDST'] => array(),
        IUserGroup::ID['SRBS'] => array(),
        IUserGroup::ID['SCHEJJJSKFQ'] => array(),
        IUserGroup::ID['SWBB'] => array(),
        IUserGroup::ID['SGZW'] => array(),
        IUserGroup::ID['SYLBZJ'] => array(),
        IUserGroup::ID['STW'] => array(),
        IUserGroup::ID['SFL'] => array(),
        IUserGroup::ID['SYCJ'] => array(),
        IUserGroup::ID['SWXB'] => array()
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}