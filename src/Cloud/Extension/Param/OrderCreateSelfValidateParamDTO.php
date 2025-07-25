<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\TradeGroupDTO;
use Com\Youzan\Cloud\Extension\Param\InvoiceDTO;
use StdClass;

/**
 * orderCreateSelfValidateParamDTO的参数说明
 * @author Baymax
 * @create Tue Jul 08 15:39:15 CST 2025
 */
class OrderCreateSelfValidateParamDTO implements \JsonSerializable {

    /**
     * 客户Id（有赞用户ID，在有赞平台账号平台下唯一）
     * @var string
     */
    private $userId;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;

    /**
     * 电话号码
     * @var string
     */
    private $phoneNum;

    /**
     * 外部用户标识
     * @var string
     */
    private $outerUserId;

    /**
     * 交易分组信息
     * @var array
     */
    private $tradeGroupDTOS;

    /**
     * 有赞用户id，用户在有赞的唯一id
     * @var string
     */
    private $yzOpenId;

    /**
     * shopId，店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $nodeKdtid;

    /**
     * 一次下单的唯一标识
     * @var string
     */
    private $bookKey;

    /**
     * 有赞连锁总部店铺id，仅供有赞连锁场景下使用。有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个总部
     * @var int
     */
    private $rootKdtId;

    /**
     * 测试
     * @var string
     */
    private $name;

    /**
     * 发票信息
     * @var InvoiceDTO
     */
    private $invoice;

    /**
     * 业务平台
     * @var string
     */
    private $bizPlatform;

    /**
     * 拓展信息。MULTI_PLAT_OUT_CHANNEL&#x3D;WX_VIDEO_XIAO_DIAN代表视频号。
     * @var stdClass
     */
    private $extension;

    /**
     * 垂直行业 COMMON:普通担保交易  HOTEL:酒店  BEAUTY:美业  OFFLINE_CATERING:餐饮  TAKEOUT:外卖  RETAIL:门店零售  EXTERNAL:第三方  YZ_CLOUD:有赞电商云  LIVE_SAMPLE:直播寄样  MEDICINE:医药  TEST:测试场景
     * @var string
     */
    private $bizCategory;

    /**
     * 订单渠道来源 YOUZAN: 有赞内部系统 ELEME_FOOD: 饿了么餐饮系统 MEITUAN_FOOD: 美团餐饮系统 CANDAO: 餐道 GUANYI: 管易 CWJ: 宠物家 WX_SMALL_SHOP: 微信小商店 WX_XIAO_DIAN: 微信视频号小店 BJ: 伯俊 HAOFUDOU: 好福兜 MEICHUANG: 美创 WANGFUJING: 王府井 TENCENT_HUIJU: 腾讯慧聚 CRM: CRM GENERAL_EXTERNAL: 通用三方 ELEME_FOOD_V2: 饿了么餐饮系统 MEITUAN_SHANGOU: 美团闪购业务
     * @var string
     */
    private $channelType;



    /**
     * @return string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(?string $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getPhoneNum(): ?string
    {
        return $this->phoneNum;
    }

    /**
     * @param string $phoneNum
     */
    public function setPhoneNum(?string $phoneNum): void
    {
        $this->phoneNum = $phoneNum;
    }

    /**
     * @return string
     */
    public function getOuterUserId(): ?string
    {
        return $this->outerUserId;
    }

    /**
     * @param string $outerUserId
     */
    public function setOuterUserId(?string $outerUserId): void
    {
        $this->outerUserId = $outerUserId;
    }

    /**
     * @return array
     */
    public function getTradeGroupDTOS(): ?array
    {
        return $this->tradeGroupDTOS;
    }

    /**
     * @param array $tradeGroupDTOS
     */
    public function setTradeGroupDTOS(?array $tradeGroupDTOS): void
    {
        $this->tradeGroupDTOS = $tradeGroupDTOS;
    }

    /**
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return int
     */
    public function getNodeKdtid(): ?int
    {
        return $this->nodeKdtid;
    }

    /**
     * @param int $nodeKdtid
     */
    public function setNodeKdtid(?int $nodeKdtid): void
    {
        $this->nodeKdtid = $nodeKdtid;
    }

    /**
     * @return string
     */
    public function getBookKey(): ?string
    {
        return $this->bookKey;
    }

    /**
     * @param string $bookKey
     */
    public function setBookKey(?string $bookKey): void
    {
        $this->bookKey = $bookKey;
    }

    /**
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return InvoiceDTO
     */
    public function getInvoice(): ?InvoiceDTO
    {
        return $this->invoice;
    }

    /**
     * @param InvoiceDTO $invoice
     */
    public function setInvoice(?InvoiceDTO $invoice): void
    {
        $this->invoice = $invoice;
    }

    /**
     * @return string
     */
    public function getBizPlatform(): ?string
    {
        return $this->bizPlatform;
    }

    /**
     * @param string $bizPlatform
     */
    public function setBizPlatform(?string $bizPlatform): void
    {
        $this->bizPlatform = $bizPlatform;
    }

    /**
     * @return stdClass
     */
    public function getExtension(): ?stdClass
    {
        return $this->extension;
    }

    /**
     * @param stdClass $extension
     */
    public function setExtension(?stdClass $extension): void
    {
        $this->extension = $extension;
    }

    /**
     * @return string
     */
    public function getBizCategory(): ?string
    {
        return $this->bizCategory;
    }

    /**
     * @param string $bizCategory
     */
    public function setBizCategory(?string $bizCategory): void
    {
        $this->bizCategory = $bizCategory;
    }

    /**
     * @return string
     */
    public function getChannelType(): ?string
    {
        return $this->channelType;
    }

    /**
     * @param string $channelType
     */
    public function setChannelType(?string $channelType): void
    {
        $this->channelType = $channelType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}