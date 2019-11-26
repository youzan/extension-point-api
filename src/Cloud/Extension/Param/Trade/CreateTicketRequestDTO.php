<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\TicketOrderItem;

/**
 * 
 * @author Baymax
 * @create Wed Sep 04 18:01:28 CST 2019
 */
class CreateTicketRequestDTO implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 买家标识
     * @var int
     */
    private $buyerId;

    /**
     * 买家手机号
     * @var string
     */
    private $buyerPhone;

    /**
     * 店铺
     * @var int
     */
    private $kdtId;

    /**
     * 
     * @var array
     */
    private $orderItemList;



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
    public function getBuyerId(): int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return string
     */
    public function getBuyerPhone(): string
    {
        return $this->buyerPhone;
    }

    /**
     * @param string $buyerPhone
     */
    public function setBuyerPhone(string $buyerPhone): void
    {
        $this->buyerPhone = $buyerPhone;
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

    /**
     * @return array
     */
    public function getOrderItemList(): array
    {
        return $this->orderItemList;
    }

    /**
     * @param array $orderItemList
     */
    public function setOrderItemList(array $orderItemList): void
    {
        $this->orderItemList = $orderItemList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}