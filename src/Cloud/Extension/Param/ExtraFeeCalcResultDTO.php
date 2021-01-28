<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\ExtPointExtraPriceResultDTO;

/**
 * 
 * @author Baymax
 * @create 2018-10-08 11:32:37.0
 */
class ExtraFeeCalcResultDTO implements \JsonSerializable {

    /**
     *  附加费用列表（已弃用，请传空值）
     * @var stdClass
     */
    private $extraFeeDetail;

    /**
     *  附加费用总额（已弃用，请使用orderExtraPrice字段）
     * @var int
     */
    private $totalExtraFeeAmount;

    /**
     * 订单号(回传)
     * @var string
     */
    private $orderNo;

    /**
     *  附加费用说明（已弃用，请使用orderExtraPrice字段）
     * @var string
     */
    private $extraFeeDesc;

    /**
     *  订单级额外费用 (包含在订单是否金额里面)
     * @var array
     */
    private $orderExtraPrice;



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

    /**
     * @return array
     */
    public function getOrderExtraPrice(): array
    {
        return $this->orderExtraPrice;
    }

    /**
     * @param array $orderExtraPrice
     */
    public function setOrderExtraPrice(array $orderExtraPrice): void
    {
        $this->orderExtraPrice = $orderExtraPrice;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}