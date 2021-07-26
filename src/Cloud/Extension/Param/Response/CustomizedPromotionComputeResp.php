<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\GoodsPromotionComputeResp;
use Com\Youzan\Cloud\Extension\Param\Response\OrderPromotionComputeResp;
use StdClass;

/**
 * 返回优惠减免信息
 * @author Baymax
 * @create 2021-07-08 11:43:47.0
 */
class CustomizedPromotionComputeResp implements \JsonSerializable {

    /**
     * 活动ID
     * @var int
     */
    private $activityId;

    /**
     * 插件类型，第二件半价（115）、限时折扣（11）、满减送（101）等
     * @var int
     */
    private $activityType;

    /**
     * 优惠级别，商品级（“goods”）、订单级（“order”）
     * @var string
     */
    private $promotionLevel;

    /**
     * 当promotionLevel返回“goods”,  需要返回的商品级别优惠减免结果
     * @var GoodsPromotionComputeResp
     */
    private $goodsPromotionComputeResp;

    /**
     * 当promotionLevel返回“order”,  需要返回的订单级别优惠减免结果
     * @var OrderPromotionComputeResp
     */
    private $orderPromotionComputeResp;

    /**
     * 扩展展示信息，需要额外透传的活动展示信息
     * @var stdClass
     */
    private $exhibitMap;



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
    public function getActivityType(): ?int
    {
        return $this->activityType;
    }

    /**
     * @param int $activityType
     */
    public function setActivityType(?int $activityType): void
    {
        $this->activityType = $activityType;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}