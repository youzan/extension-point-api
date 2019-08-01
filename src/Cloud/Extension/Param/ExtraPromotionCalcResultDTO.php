<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;

/**
 * 
 * @author Baymax
 * @create Mon Oct 08 20:26:05 CST 2018
 */
class ExtraPromotionCalcResultDTO implements \JsonSerializable {

    /**
     * 附加优惠明细
     * @var stdClass
     */
    private $extraPromotionDetail;

    /**
     * 总体优惠金额(单位分)
     * @var int
     */
    private $totalPromotionAmount;

    /**
     * 订单号(回传)
     * @var string
     */
    private $orderNo;

    /**
     * 附加优惠说明
     * @var string
     */
    private $extraPromotionDesc;



    /**
     * @return stdClass
     */
    public function getExtraPromotionDetail(): stdClass
    {
        return $this->extraPromotionDetail;
    }

    /**
     * @param stdClass $extraPromotionDetail
     */
    public function setExtraPromotionDetail(stdClass $extraPromotionDetail): void
    {
        $this->extraPromotionDetail = $extraPromotionDetail;
    }

    /**
     * @return int
     */
    public function getTotalPromotionAmount(): int
    {
        return $this->totalPromotionAmount;
    }

    /**
     * @param int $totalPromotionAmount
     */
    public function setTotalPromotionAmount(int $totalPromotionAmount): void
    {
        $this->totalPromotionAmount = $totalPromotionAmount;
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
    public function getExtraPromotionDesc(): string
    {
        return $this->extraPromotionDesc;
    }

    /**
     * @param string $extraPromotionDesc
     */
    public function setExtraPromotionDesc(string $extraPromotionDesc): void
    {
        $this->extraPromotionDesc = $extraPromotionDesc;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}