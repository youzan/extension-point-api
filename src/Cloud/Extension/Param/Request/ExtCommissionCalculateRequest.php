<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\ExtCommissionCalculateRequest\ExtOrderItem;

/**
 * 导购佣金计算请求
 * @author Baymax
 * @create Thu Nov 30 17:41:09 CST 2023
 */
class ExtCommissionCalculateRequest implements \JsonSerializable {

    /**
     * 订单编号
     * @var string
     */
    private $orderNo;

    /**
     * 提成计算类型；支付场景：0 ，退款场景：1
     * @var int
     */
    private $type;

    /**
     * 销售导购yz_open_id（为空代表没有销售导购）
     * @var string
     */
    private $salesGuideOpenId;

    /**
     * 专属导购yz_open_id（为空代表没有专属导购）
     * @var string
     */
    private $serviceGuideOpenId;

    /**
     * 订单实付金额(不包含运费 单位:分)
     * @var int
     */
    private $realPay;

    /**
     * 订单商品信息
     * @var array
     */
    private $items;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 总店ID
     * @var int
     */
    private $rootKdtId;



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
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getSalesGuideOpenId(): ?string
    {
        return $this->salesGuideOpenId;
    }

    /**
     * @param string $salesGuideOpenId
     */
    public function setSalesGuideOpenId(?string $salesGuideOpenId): void
    {
        $this->salesGuideOpenId = $salesGuideOpenId;
    }

    /**
     * @return string
     */
    public function getServiceGuideOpenId(): ?string
    {
        return $this->serviceGuideOpenId;
    }

    /**
     * @param string $serviceGuideOpenId
     */
    public function setServiceGuideOpenId(?string $serviceGuideOpenId): void
    {
        $this->serviceGuideOpenId = $serviceGuideOpenId;
    }

    /**
     * @return int
     */
    public function getRealPay(): ?int
    {
        return $this->realPay;
    }

    /**
     * @param int $realPay
     */
    public function setRealPay(?int $realPay): void
    {
        $this->realPay = $realPay;
    }

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