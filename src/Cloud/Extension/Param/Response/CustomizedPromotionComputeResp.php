<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\GoodsPromotionComputeResp;
use Com\Youzan\Cloud\Extension\Param\Response\OrderPromotionComputeResp;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2021-07-08 11:43:47.0
 */
class CustomizedPromotionComputeResp implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $activityId;

    /**
     * 
     * @var int
     */
    private $appType;

    /**
     * 
     * @var string
     */
    private $promotionLevel;

    /**
     * 
     * @var GoodsPromotionComputeResp
     */
    private $goodsPromotionComputeResp;

    /**
     * 
     * @var OrderPromotionComputeResp
     */
    private $orderPromotionComputeResp;

    /**
     * 
     * @var stdClass
     */
    private $exhibitMap;

    /**
     * 
     * @var stdClass
     */
    private $extraMap;



    /**
     * @return int
     */
    public function getActivityId(): ?int
    {
        return $this->activityId;
    }

    /**
     * @param int $activityId
     */
    public function setActivityId(?int $activityId): void
    {
        $this->activityId = $activityId;
    }

    /**
     * @return int
     */
    public function getAppType(): ?int
    {
        return $this->appType;
    }

    /**
     * @param int $appType
     */
    public function setAppType(?int $appType): void
    {
        $this->appType = $appType;
    }

    /**
     * @return string
     */
    public function getPromotionLevel(): ?string
    {
        return $this->promotionLevel;
    }

    /**
     * @param string $promotionLevel
     */
    public function setPromotionLevel(?string $promotionLevel): void
    {
        $this->promotionLevel = $promotionLevel;
    }

    /**
     * @return GoodsPromotionComputeResp
     */
    public function getGoodsPromotionComputeResp(): ?GoodsPromotionComputeResp
    {
        return $this->goodsPromotionComputeResp;
    }

    /**
     * @param GoodsPromotionComputeResp $goodsPromotionComputeResp
     */
    public function setGoodsPromotionComputeResp(?GoodsPromotionComputeResp $goodsPromotionComputeResp): void
    {
        $this->goodsPromotionComputeResp = $goodsPromotionComputeResp;
    }

    /**
     * @return OrderPromotionComputeResp
     */
    public function getOrderPromotionComputeResp(): ?OrderPromotionComputeResp
    {
        return $this->orderPromotionComputeResp;
    }

    /**
     * @param OrderPromotionComputeResp $orderPromotionComputeResp
     */
    public function setOrderPromotionComputeResp(?OrderPromotionComputeResp $orderPromotionComputeResp): void
    {
        $this->orderPromotionComputeResp = $orderPromotionComputeResp;
    }

    /**
     * @return stdClass
     */
    public function getExhibitMap(): ?stdClass
    {
        return $this->exhibitMap;
    }

    /**
     * @param stdClass $exhibitMap
     */
    public function setExhibitMap(?stdClass $exhibitMap): void
    {
        $this->exhibitMap = $exhibitMap;
    }

    /**
     * @return stdClass
     */
    public function getExtraMap(): ?stdClass
    {
        return $this->extraMap;
    }

    /**
     * @param stdClass $extraMap
     */
    public function setExtraMap(?stdClass $extraMap): void
    {
        $this->extraMap = $extraMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}