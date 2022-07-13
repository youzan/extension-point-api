<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use DateTime;

/**
 *  
 * @author Baymax
 * @create Mon Mar 14 19:37:42 CST 2022
 */
class CustomerExtBillRecordQueryRequest implements \JsonSerializable {

    /**
     * 用户手机号
     * @var string
     */
    private $userPhone;

    /**
     * 汇总卡号
     * @var string
     */
    private $cardNo;

    /**
     * 业务类型
     * @var string
     */
    private $bizType;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 起始时间（毫秒）
     * @var int
     */
    private $beginTradeTime;

    /**
     * 结束时间（毫秒）
     * @var int
     */
    private $endTradeTime;

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
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 有赞开放ID
     * @var string
     */
    private $yzOpenId;

    /**
     * 总部店铺ID
     * @var int
     */
    private $rootKdtId;



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
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }

    /**
     * @param string $cardNo
     */
    public function setCardNo(?string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return string
     */
    public function getBizType(): ?string
    {
        return $this->bizType;
    }

    /**
     * @param string $bizType
     */
    public function setBizType(?string $bizType): void
    {
        $this->bizType = $bizType;
    }

    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getBeginTradeTime(): ?int
    {
        return $this->beginTradeTime;
    }

    /**
     * @param int $beginTradeTime
     */
    public function setBeginTradeTime(?int $beginTradeTime): void
    {
        $this->beginTradeTime = $beginTradeTime;
    }

    /**
     * @return int
     */
    public function getEndTradeTime(): ?int
    {
        return $this->endTradeTime;
    }

    /**
     * @param int $endTradeTime
     */
    public function setEndTradeTime(?int $endTradeTime): void
    {
        $this->endTradeTime = $endTradeTime;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}