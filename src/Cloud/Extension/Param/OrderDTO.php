<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\OrderItemDTO;

/**
 * 订单数据
 * @author Baymax
 * @create Tue Sep 25 17:50:17 CST 2018
 */
class OrderDTO implements \JsonSerializable {

    /**
     * 订单条目
     * @var array
     */
    private $items;

    /**
     * 超期时间（时间戳）
     * @var int
     */
    private $expireTime;

    /**
     * 订单付款金额
     * @var int
     */
    private $orderPayAmount;

    /**
     * 币种
     * @var string
     */
    private $currencyCode;

    /**
     * 交易描述
     * @var string
     */
    private $tradeDesc;

    /**
     * 订单号
     * @var string
     */
    private $orderNO;



    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return int
     */
    public function getExpireTime(): int
    {
        return $this->expireTime;
    }

    /**
     * @param int $expireTime
     */
    public function setExpireTime(int $expireTime): void
    {
        $this->expireTime = $expireTime;
    }

    /**
     * @return int
     */
    public function getOrderPayAmount(): int
    {
        return $this->orderPayAmount;
    }

    /**
     * @param int $orderPayAmount
     */
    public function setOrderPayAmount(int $orderPayAmount): void
    {
        $this->orderPayAmount = $orderPayAmount;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode(string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return string
     */
    public function getTradeDesc(): string
    {
        return $this->tradeDesc;
    }

    /**
     * @param string $tradeDesc
     */
    public function setTradeDesc(string $tradeDesc): void
    {
        $this->tradeDesc = $tradeDesc;
    }

    /**
     * @return string
     */
    public function getOrderNO(): string
    {
        return $this->orderNO;
    }

    /**
     * @param string $orderNO
     */
    public function setOrderNO(string $orderNO): void
    {
        $this->orderNO = $orderNO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}