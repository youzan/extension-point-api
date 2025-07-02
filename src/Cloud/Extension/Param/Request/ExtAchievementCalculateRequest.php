<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\ExtAchievementCalculateRequest\ExtOrderItem;

/**
 * 请求参数
 * @author Baymax
 * @create Mon Mar 31 11:21:07 CST 2025
 */
class ExtAchievementCalculateRequest implements \JsonSerializable {

    /**
     * 单据号, 支付和退款场景传入的为有赞订单号,无原单退款单场景传入的是外部无原单退款单号
     * @var string
     */
    private $bizNo;

    /**
     * 单据类型，1.支付订单，2.退款订单, 3.无原单退款单
     * @var int
     */
    private $bizType;

    /**
     * 销售导购yzOpenId（为空代表没有销售导购）
     * @var string
     */
    private $salesGuideOpenId;

    /**
     * 专属导购idyzOpenId（为空代表没有专属导购）
     * @var string
     */
    private $serviceGuideOpenId;

    /**
     * 订单明细
     * @var array
     */
    private $items;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 总部id
     * @var int
     */
    private $rootKdtId;



    /**
     * @return string
     */
    public function getBizNo(): ?string
    {
        return $this->bizNo;
    }

    /**
     * @param string $bizNo
     */
    public function setBizNo(?string $bizNo): void
    {
        $this->bizNo = $bizNo;
    }

    /**
     * @return int
     */
    public function getBizType(): ?int
    {
        return $this->bizType;
    }

    /**
     * @param int $bizType
     */
    public function setBizType(?int $bizType): void
    {
        $this->bizType = $bizType;
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