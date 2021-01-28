<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\ExtCalculatePriceItemResultDTO;
use Com\Youzan\Cloud\Extension\Param\ExtPromotionCoreResultDTO;

/**
 * 
 * @author Baymax
 * @create 2018-10-08 20:26:05.0
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
     * 商品级优惠信息
     * @var array
     */
    private $goodsPreferences;

    /**
     * 邮费优惠信息
     * @var array
     */
    private $postagePreferences;



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

    /**
     * @return array
     */
    public function getGoodsPreferences(): array
    {
        return $this->goodsPreferences;
    }

    /**
     * @param array $goodsPreferences
     */
    public function setGoodsPreferences(array $goodsPreferences): void
    {
        $this->goodsPreferences = $goodsPreferences;
    }

    /**
     * @return array
     */
    public function getPostagePreferences(): array
    {
        return $this->postagePreferences;
    }

    /**
     * @param array $postagePreferences
     */
    public function setPostagePreferences(array $postagePreferences): void
    {
        $this->postagePreferences = $postagePreferences;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}