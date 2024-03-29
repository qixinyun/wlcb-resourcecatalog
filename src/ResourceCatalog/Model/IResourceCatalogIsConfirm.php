<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogIsConfirm
{
    const TYPE_RESOURECATALOG_CONFIRM = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['QYYCMLXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SXQYHMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['DYZGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYGDZCTZXMHZHBA'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYGSZXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['AJNSRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYDSXZCFXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['PXSTYXHDJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['HSZYZGZXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JGJCDXZJL'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JXSZLJDW'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZLJCQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SLGCZBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['PGJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['DTJXJGRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YXZZDWJBGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SLYSXKZXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZYJNZSXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYRYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SHZZNJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YLBXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['TJDCDXML'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JDCWFXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GTGSHXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['CMQYSBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YPLSQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JGRYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JXMPCPXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JSZGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SJYXXS'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SYBXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SJJXMXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JYJGXINXI'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GRRYXXJYJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GRRYXXJTJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GRRYXXGDJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GRRYXXMZJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SBQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SFJDJGDJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GZJGJBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GZYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JCFLFWSXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['LSSWSXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['LSZYZGZXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GZRYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YSZYZGZXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JBYFKZJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['FYCRYJLXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JGRYXXSWGXJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['MBFQYML'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SHTTDJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYZXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYDXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['CCJCJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['TZXMBLJGGSXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['TZXMMCDMPPXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SFJDRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SFJDJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['LSZYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['LSNDPJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['LSSWSNDPJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SAJLVJQ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['BWGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['WWSDXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['WWSDGMXSJLSX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYSWJBDJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['NSXYDJPDXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYQSGGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['FZCNSRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['LXSDJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GRYCJJBAXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['XZJLXXZRR'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['XZJLXXFRHQTZZ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['MZSHTTHMBFQYDW'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYJBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SXBZXRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['HXLDGXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SCAQBLJLHMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YZSXWFQY'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['HGSXQY'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['HGGJRZ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZZQSGBZHSFGDMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZZQCYBGCZLJMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZZQYZYBGCMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SLJSSC'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
IResourceCatalog::TYPE['LHCJFRHMD'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
IResourceCatalog::TYPE['LHJLFRHMD'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        //@position
    );
}
