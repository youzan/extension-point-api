<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Java\Lang\String;
use Com\Youzan\Cloud\Extension\Param\CustomerExtValueCardsQueryRequest\ItemContext;

/**
 *  
 * @author Baymax
 * @create Tue Jun 21 16:04:01 CST 2022
 */
class CustomerExtValueCardsQueryRequest implements \JsonSerializable {

    /**
     * 有赞UID
     * @var string
     */
    private $buyerId;

    /**
     * 用户手机号
     * @var string
     */
    private $userPhone;

    /**
     * 卡类型 BALANCE_CARD: 储值余额类型 VALUE_CARD：储值卡 ALL:全部
     * @var string
     */
    private $cardType;

    /**
     * 卡状态：INIT:初始化,NORMAL:正常,CFREEZE:冻结,CLOSE:已注销,RECEDING:退卡处理中,RECEDED:已退卡
     * @var string
     */
    private $cardStatus;

    /**
     * 卡号（调用方生成，取值自列表查询扩展点返回 cardNo 字段）
     * @var array
     */
    private $cardNoList;

    /**
     * 页码，页数据, 默认为 1
     * @var int
     */
    private $page;

    /**
     * 一页获取的 数据条数, 默认为 10
     * @var int
     */
    private $pageSize;

    /**
     * 用户有赞开放ID
     * @var string
     */
    private $yzOpenId;

    /**
     * 总部店铺ID
     * @var int
     */
    private $rootKdtId;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 商品信息列表
     * @var array
     */
    private $itemList;



    /**
     * @return string
     */
    public function getBuyerId(): ?string
    {
        return $this->buyerId;
    }

    /**
     * @param string $buyerId
     */
    public function setBuyerId(?string $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return string
     */
    public function getUserPhone(): ?string
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     */
    public function setUserPhone(?string $userPhone): void
    {
        $this->userPhone = $userPhone;
    }

    /**
     * @return string
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    /**
     * @param string $cardType
     */
    public function setCardType(?string $cardType): void
    {
        $this->cardType = $cardType;
    }

    /**
     * @return string
     */
    public function getCardStatus(): ?string
    {
        return $this->cardStatus;
    }

    /**
     * @param string $cardStatus
     */
    public function setCardStatus(?string $cardStatus): void
    {
        $this->cardStatus = $cardStatus;
    }

    /**
     * @return array
     */
    public function getCardNoList(): ?array
    {
        return $this->cardNoList;
    }

    /**
     * @param array $cardNoList
     */
    public function setCardNoList(?array $cardNoList): void
    {
        $this->cardNoList = $cardNoList;
    }

    /**
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(?int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize(?int $pageSize): void
    {
        $this->pageSize = $pageSize;
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
     * @return array
     */
    public function getItemList(): ?array
    {
        return $this->itemList;
    }

    /**
     * @param array $itemList
     */
    public function setItemList(?array $itemList): void
    {
        $this->itemList = $itemList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}