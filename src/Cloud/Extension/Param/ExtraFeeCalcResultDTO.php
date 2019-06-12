<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2018-10-08 11:32:37.0
 */
class ExtraFeeCalcResultDTO implements \JsonSerializable {

    /**
     * 附加费用列表
     * @var stdClass
     */
    private $extraFeeDetail;

    /**
     * 附加费用总额
     * @var int
     */
    private $totalExtraFeeAmount;

    /**
     * 订单号(回传)
     * @var string
     */
    private $orderNo;

    /**
     * 附加费用说明
     * @var string
     */
    private $extraFeeDesc;



    /**
     * @return stdClass
     */
    public function getExtraFeeDetail(): stdClass
    {
        return $this->extraFeeDetail;
    }

    /**
     * @param stdClass $extraFeeDetail
     */
    public function setExtraFeeDetail(stdClass $extraFeeDetail): void
    {
        $this->extraFeeDetail = $extraFeeDetail;
    }

    /**
     * @return int
     */
    public function getTotalExtraFeeAmount(): int
    {
        return $this->totalExtraFeeAmount;
    }

    /**
     * @param int $totalExtraFeeAmount
     */
    public function setTotalExtraFeeAmount(int $totalExtraFeeAmount): void
    {
        $this->totalExtraFeeAmount = $totalExtraFeeAmount;
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
    public function getExtraFeeDesc(): string
    {
        return $this->extraFeeDesc;
    }

    /**
     * @param string $extraFeeDesc
     */
    public function setExtraFeeDesc(string $extraFeeDesc): void
    {
        $this->extraFeeDesc = $extraFeeDesc;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}