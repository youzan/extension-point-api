<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2020-03-24 11:28:58.0
 */
class ValueCardMakeCardRequest implements \JsonSerializable {

    /**
     * 有赞购卡订单编号
     * @var string
     */
    private $orderNo;

    /**
     * 购买张数
     * @var int
     */
    private $buyNum;

    /**
     * 购买商品SKU编号
     * @var string
     */
    private $productSkuNo;

    /**
     * 支付总金额（分）
     * @var int
     */
    private $payPrice;

    /**
     * 支付方式（ECARD:E卡支付，CREDIT_CARD：贷记卡支付，WX_JS：微信支付，DEBIT_CARD：借记卡支付，ALIPAY_WAP：支付宝支付）
     * @var string
     */
    private $payMethod;

    /**
     * 支付时间,Unix毫秒时间类型
     * @var int
     */
    private $payTime;

    /**
     * 下单时间,Unix毫秒时间类型
     * @var int
     */
    private $orderTime;

    /**
     * 礼包ID（调用方生成，长度不得大于24）
     * @var string
     */
    private $giftPackId;

    /**
     * 礼包版本（调用方生成，长度不得大于24）
     * @var string
     */
    private $giftPackVersion;

    /**
     * 有赞用户开放ID
     * @var string
     */
    private $yzOpenId;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 总部店铺ID
     * @var int
     */
    private $rootKdtId;



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
    public function getBuyNum(): int
    {
        return $this->buyNum;
    }

    /**
     * @param int $buyNum
     */
    public function setBuyNum(int $buyNum): void
    {
        $this->buyNum = $buyNum;
    }

    /**
     * @return string
     */
    public function getProductSkuNo(): string
    {
        return $this->productSkuNo;
    }

    /**
     * @param string $productSkuNo
     */
    public function setProductSkuNo(string $productSkuNo): void
    {
        $this->productSkuNo = $productSkuNo;
    }

    /**
     * @return int
     */
    public function getPayPrice(): int
    {
        return $this->payPrice;
    }

    /**
     * @param int $payPrice
     */
    public function setPayPrice(int $payPrice): void
    {
        $this->payPrice = $payPrice;
    }

    /**
     * @return string
     */
    public function getPayMethod(): string
    {
        return $this->payMethod;
    }

    /**
     * @param string $payMethod
     */
    public function setPayMethod(string $payMethod): void
    {
        $this->payMethod = $payMethod;
    }

    /**
     * @return int
     */
    public function getPayTime(): int
    {
        return $this->payTime;
    }

    /**
     * @param int $payTime
     */
    public function setPayTime(int $payTime): void
    {
        $this->payTime = $payTime;
    }

    /**
     * @return int
     */
    public function getOrderTime(): int
    {
        return $this->orderTime;
    }

    /**
     * @param int $orderTime
     */
    public function setOrderTime(int $orderTime): void
    {
        $this->orderTime = $orderTime;
    }

    /**
     * @return string
     */
    public function getGiftPackId(): string
    {
        return $this->giftPackId;
    }

    /**
     * @param string $giftPackId
     */
    public function setGiftPackId(string $giftPackId): void
    {
        $this->giftPackId = $giftPackId;
    }

    /**
     * @return string
     */
    public function getGiftPackVersion(): string
    {
        return $this->giftPackVersion;
    }

    /**
     * @param string $giftPackVersion
     */
    public function setGiftPackVersion(string $giftPackVersion): void
    {
        $this->giftPackVersion = $giftPackVersion;
    }

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
     * @return int
     */
    public function getRootKdtId(): int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}