<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\ExtCommissionCalculateResponse\ExtGuideCommission;

/**
 * 导购佣金计算结果
 * @author Baymax
 * @create Mon Jun 06 14:05:00 CST 2022
 */
class ExtCommissionCalculateResponse implements \JsonSerializable {

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 订单编号
     * @var string
     */
    private $orderNo;

    /**
     * 销售导购佣金计算结果
     * @var ExtGuideCommission
     */
    private $salesGuideCommission;

    /**
     * 专属导购佣金计算结果
     * @var ExtGuideCommission
     */
    private $serviceGuideCommission;



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
     * @return ExtGuideCommission
     */
    public function getSalesGuideCommission(): ?ExtGuideCommission
    {
        return $this->salesGuideCommission;
    }

    /**
     * @param ExtGuideCommission $salesGuideCommission
     */
    public function setSalesGuideCommission(?ExtGuideCommission $salesGuideCommission): void
    {
        $this->salesGuideCommission = $salesGuideCommission;
    }

    /**
     * @return ExtGuideCommission
     */
    public function getServiceGuideCommission(): ?ExtGuideCommission
    {
        return $this->serviceGuideCommission;
    }

    /**
     * @param ExtGuideCommission $serviceGuideCommission
     */
    public function setServiceGuideCommission(?ExtGuideCommission $serviceGuideCommission): void
    {
        $this->serviceGuideCommission = $serviceGuideCommission;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}