<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2020-01-06 12:52:32.0
 */
class CustomerExtValueCardsQueryRequest implements \JsonSerializable {

    /**
     * 用户标识
     * @var string
     */
    private $yzOpenId;

    /**
     * 用户手机
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
     * 卡号
     * @var array
     */
    private $cardNoList;

    /**
     * 页码，页数据, 默认为 1
     * @var array
     */
    private $page;

    /**
     * 一页获取的 数据条数, 默认为 10
     * @var array
     */
    private $pageSize;

    /**
     * 有赞UID
     * @var array
     */
    private $buyerId;



    /**
     * @return string
     */
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return string
     */
    public function getUserPhone(): string
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     */
    public function setUserPhone(string $userPhone): void
    {
        $this->userPhone = $userPhone;
    }

    /**
     * @return string
     */
    public function getCardType(): string
    {
        return $this->cardType;
    }

    /**
     * @param string $cardType
     */
    public function setCardType(string $cardType): void
    {
        $this->cardType = $cardType;
    }

    /**
     * @return string
     */
    public function getCardStatus(): string
    {
        return $this->cardStatus;
    }

    /**
     * @param string $cardStatus
     */
    public function setCardStatus(string $cardStatus): void
    {
        $this->cardStatus = $cardStatus;
    }

    /**
     * @return array
     */
    public function getCardNoList(): array
    {
        return $this->cardNoList;
    }

    /**
     * @param array $cardNoList
     */
    public function setCardNoList(array $cardNoList): void
    {
        $this->cardNoList = $cardNoList;
    }

    /**
     * @return array
     */
    public function getPage(): array
    {
        return $this->page;
    }

    /**
     * @param array $page
     */
    public function setPage(array $page): void
    {
        $this->page = $page;
    }

    /**
     * @return array
     */
    public function getPageSize(): array
    {
        return $this->pageSize;
    }

    /**
     * @param array $pageSize
     */
    public function setPageSize(array $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return array
     */
    public function getBuyerId(): array
    {
        return $this->buyerId;
    }

    /**
     * @param array $buyerId
     */
    public function setBuyerId(array $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}