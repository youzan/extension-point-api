<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\OrderItemDTO;

/**
 * 订单数据
 * @author Baymax
 * @create Fri Jul 21 18:26:18 CST 2023
 */
class OrderDTO implements \JsonSerializable {

    /**
     * 订单条目
     * @var array
     */
    private $items;

    /**
     * 订单超时时间（时间戳）
     * @var int
     */
    private $expireTime;

    /**
     * 订单实付金额
     * @var int
     */
    private $orderPayAmount;

    /**
     * 交易币种，默认是人民币
     * @var string
     */
    private $currencyCode;

    /**
     * 交易描述，商品名称的累加，超长取前20个字符
     * @var string
     */
    private $tradeDesc;

    /**
     * 有赞订单号，E开头+年月日时分秒+随机数，长度24位字母和数字组合
     * @var string
     */
    private $orderNO;



    /**
     * @return array
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return int
     */
    public function getExpireTime(): ?int
    {
        return $this->expireTime;
    }

    /**
     * @param int $expireTime
     */
    public function setExpireTime(?int $expireTime): void
    {
        $this->expireTime = $expireTime;
    }

    /**
     * @return int
     */
    public function getOrderPayAmount(): ?int
    {
        return $this->orderPayAmount;
    }

    /**
     * @param int $orderPayAmount
     */
    public function setOrderPayAmount(?int $orderPayAmount): void
    {
        $this->orderPayAmount = $orderPayAmount;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return string
     */
    public function getTradeDesc(): ?string
    {
        return $this->tradeDesc;
    }

    /**
     * @param string $tradeDesc
     */
    public function setTradeDesc(?string $tradeDesc): void
    {
        $this->tradeDesc = $tradeDesc;
    }

    /**
     * @return string
     */
    public function getOrderNO(): ?string
    {
        return $this->orderNO;
    }

    /**
     * @param string $orderNO
     */
    public function setOrderNO(?string $orderNO): void
    {
        $this->orderNO = $orderNO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}