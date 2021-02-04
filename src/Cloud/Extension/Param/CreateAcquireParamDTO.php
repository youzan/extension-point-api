<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 入参
 * @author Baymax
 * @create 2019-07-29 20:50:49.0
 */
class CreateAcquireParamDTO implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 总价（单位：分）
     * @var int
     */
    private $amount;

    /**
     * 商品名称
     * @var string
     */
    private $goodsName;

    /**
     * 支付类型（UPWILD_WX 去野微信，SUNMI_WX 商米SDK-微信，SUNMI_ALIPAY 商米SDK-支付宝）
     * @var string
     */
    private $payType;



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
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getGoodsName(): string
    {
        return $this->goodsName;
    }

    /**
     * @param string $goodsName
     */
    public function setGoodsName(string $goodsName): void
    {
        $this->goodsName = $goodsName;
    }

    /**
     * @return string
     */
    public function getPayType(): string
    {
        return $this->payType;
    }

    /**
     * @param string $payType
     */
    public function setPayType(string $payType): void
    {
        $this->payType = $payType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}