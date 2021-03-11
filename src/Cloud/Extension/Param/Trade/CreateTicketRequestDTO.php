<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\TicketOrderItem;

/**
 * 
 * @author Baymax
 * @create 2019-09-04 18:01:28.0
 */
class CreateTicketRequestDTO implements \JsonSerializable {

    /**
     * 有赞订单号，E开头+年月日时分秒+随机数，长度24位字母和数字组合
     * @var string
     */
    private $orderNo;

    /**
     * 客户Id（有赞用户ID，在有赞平台账号平台下唯一。）
     * @var int
     */
    private $buyerId;

    /**
     * 买家手机号
     * @var string
     */
    private $buyerPhone;

    /**
     * 买家姓名
     * @var string
     */
    private $buyerName;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
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
    public function getBuyerId(): ?int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(?int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return string
     */
    public function getBuyerPhone(): ?string
    {
        return $this->buyerPhone;
    }

    /**
     * @param string $buyerPhone
     */
    public function setBuyerPhone(?string $buyerPhone): void
    {
        $this->buyerPhone = $buyerPhone;
    }

    /**
     * @return string
     */
    public function getBuyerName(): ?string
    {
        return $this->buyerName;
    }

    /**
     * @param string $buyerName
     */
    public function setBuyerName(?string $buyerName): void
    {
        $this->buyerName = $buyerName;
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
    public function getOrderItemList(): ?array
    {
        return $this->orderItemList;
    }

    /**
     * @param array $orderItemList
     */
    public function setOrderItemList(?array $orderItemList): void
    {
        $this->orderItemList = $orderItemList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}