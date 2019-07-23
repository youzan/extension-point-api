<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 支付参数
 * @author Baymax
 * @create 2019-07-23 20:24:20.0
 */
class SubmitPayParamDTO implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 支付金额,单位：分
     * @var int
     */
    private $payAmount;

    /**
     * 商品名称
     * @var string
     */
    private $goodsName;

    /**
     * 微信扫码支付，支付宝扫码支付必传
     * @var string
     */
    private $authCode;

    /**
     * 请求方ip
     * @var string
     */
    private $requestIp;



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
    public function getPayAmount(): int
    {
        return $this->payAmount;
    }

    /**
     * @param int $payAmount
     */
    public function setPayAmount(int $payAmount): void
    {
        $this->payAmount = $payAmount;
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
    public function getAuthCode(): string
    {
        return $this->authCode;
    }

    /**
     * @param string $authCode
     */
    public function setAuthCode(string $authCode): void
    {
        $this->authCode = $authCode;
    }

    /**
     * @return string
     */
    public function getRequestIp(): string
    {
        return $this->requestIp;
    }

    /**
     * @param string $requestIp
     */
    public function setRequestIp(string $requestIp): void
    {
        $this->requestIp = $requestIp;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}