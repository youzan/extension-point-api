<?php

namespace Com\Youzan\Cloud\Extension\Param;

use DateTime;
use StdClass;
use Com\Youzan\Cloud\Extension\Param\OrderItemMsgDTO;
use Com\Youzan\Cloud\Extension\Param\InvalidOrderItemMsgDTO;

/**
 * 失效订单DTO
 * @author Baymax
 * @create Thu Mar 14 15:34:50 CST 2019
 */
class OrderInvalidDTO implements \JsonSerializable {

    /**
     * 类型
     * @var string
     */
    private $bizCategory;

    /**
     * 买家id
     * @var int
     */
    private $buyerId;

    /**
     * 通道
     * @var int
     */
    private $channel;

    /**
     * 创建时间
     * @var DateTime
     */
    private $createTime;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extra;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 消息来源
     * @var array
     */
    private $notifyConsumerGroup;

    /**
     * 订单id
     * @var int
     */
    private $orderId;

    /**
     * 订单编号
     * @var string
     */
    private $orderNo;

    /**
     * 订单类型
     * @var string
     */
    private $orderType;

    /**
     * 
     * @var int
     */
    private $shopId;

    /**
     * 来源
     * @var string
     */
    private $source;

    /**
     * 标签信息
     * @var OrderItemMsgDTO
     */
    private $tags;

    /**
     * 失败订单信息
     * @var array
     */
    private $invalidOrderItemMsgGroup;



    /**
     * @return string
     */
    public function getBizCategory(): string
    {
        return $this->bizCategory;
    }

    /**
     * @param string $bizCategory
     */
    public function setBizCategory(string $bizCategory): void
    {
        $this->bizCategory = $bizCategory;
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
     * @return int
     */
    public function getChannel(): int
    {
        return $this->channel;
    }

    /**
     * @param int $channel
     */
    public function setChannel(int $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return DateTime
     */
    public function getCreateTime(): DateTime
    {
        return $this->createTime;
    }

    /**
     * @param DateTime $createTime
     */
    public function setCreateTime(DateTime $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return stdClass
     */
    public function getExtra(): stdClass
    {
        return $this->extra;
    }

    /**
     * @param stdClass $extra
     */
    public function setExtra(stdClass $extra): void
    {
        $this->extra = $extra;
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
    public function getNotifyConsumerGroup(): array
    {
        return $this->notifyConsumerGroup;
    }

    /**
     * @param array $notifyConsumerGroup
     */
    public function setNotifyConsumerGroup(array $notifyConsumerGroup): void
    {
        $this->notifyConsumerGroup = $notifyConsumerGroup;
    }

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId(int $orderId): void
    {
        $this->orderId = $orderId;
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
     * @return string
     */
    public function getOrderType(): string
    {
        return $this->orderType;
    }

    /**
     * @param string $orderType
     */
    public function setOrderType(string $orderType): void
    {
        $this->orderType = $orderType;
    }

    /**
     * @return int
     */
    public function getShopId(): int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId(int $shopId): void
    {
        $this->shopId = $shopId;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    /**
     * @return OrderItemMsgDTO
     */
    public function getTags(): OrderItemMsgDTO
    {
        return $this->tags;
    }

    /**
     * @param OrderItemMsgDTO $tags
     */
    public function setTags(OrderItemMsgDTO $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return array
     */
    public function getInvalidOrderItemMsgGroup(): array
    {
        return $this->invalidOrderItemMsgGroup;
    }

    /**
     * @param array $invalidOrderItemMsgGroup
     */
    public function setInvalidOrderItemMsgGroup(array $invalidOrderItemMsgGroup): void
    {
        $this->invalidOrderItemMsgGroup = $invalidOrderItemMsgGroup;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}