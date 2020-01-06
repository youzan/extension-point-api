<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2020-01-06 11:40:29.0
 */
class CustomerExtBillRecordQueryRequest implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $userPhone;

    /**
     * 
     * @var string
     */
    private $cardNo;

    /**
     * 
     * @var string
     */
    private $bizType;

    /**
     * 
     * @var string
     */
    private $orderNo;

    /**
     * 
     * @var int
     */
    private $beginTradeTime;

    /**
     * 
     * @var int
     */
    private $endTradeTime;

    /**
     * 
     * @var int
     */
    private $page;

    /**
     * 
     * @var int
     */
    private $pageSize;

    /**
     * 
     * @var int
     */
    private $kdtId;



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
    public function getCardNo(): string
    {
        return $this->cardNo;
    }

    /**
     * @param string $cardNo
     */
    public function setCardNo(string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return string
     */
    public function getBizType(): string
    {
        return $this->bizType;
    }

    /**
     * @param string $bizType
     */
    public function setBizType(string $bizType): void
    {
        $this->bizType = $bizType;
    }

    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getBeginTradeTime(): int
    {
        return $this->beginTradeTime;
    }

    /**
     * @param int $beginTradeTime
     */
    public function setBeginTradeTime(int $beginTradeTime): void
    {
        $this->beginTradeTime = $beginTradeTime;
    }

    /**
     * @return int
     */
    public function getEndTradeTime(): int
    {
        return $this->endTradeTime;
    }

    /**
     * @param int $endTradeTime
     */
    public function setEndTradeTime(int $endTradeTime): void
    {
        $this->endTradeTime = $endTradeTime;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize(int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}