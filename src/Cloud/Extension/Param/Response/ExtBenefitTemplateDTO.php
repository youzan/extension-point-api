<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Request\ExtCarrierTplInfoDTO;
use Com\Youzan\Cloud\Extension\Param\Plugin\ExtTemplateCouponDTO;
use Com\Youzan\Cloud\Extension\Param\Plugin\ExtTemplateDiscountDTO;
use Com\Youzan\Cloud\Extension\Param\Plugin\ExtTemplatePostageDTO;
use Com\Youzan\Cloud\Extension\Param\Plugin\ExtTemplatePointsDTO;

/**
 * 权益信息
 * @author Baymax
 * @create 2020-03-10 15:44:13.0
 */
class ExtBenefitTemplateDTO implements \JsonSerializable {

    /**
     * 权益载体
     * @var ExtCarrierTplInfoDTO
     */
    private $extCarrierTplInfoDTO;

    /**
     * 发放优惠券权益
     * @var ExtTemplateCouponDTO
     */
    private $coupon;

    /**
     * 折扣权益
     * @var ExtTemplateDiscountDTO
     */
    private $discount;

    /**
     * 包邮权益
     * @var ExtTemplatePostageDTO
     */
    private $postage;

    /**
     * 送积分权益
     * @var ExtTemplatePointsDTO
     */
    private $points;



    /**
     * @return ExtCarrierTplInfoDTO
     */
    public function getExtCarrierTplInfoDTO(): ExtCarrierTplInfoDTO
    {
        return $this->extCarrierTplInfoDTO;
    }

    /**
     * @param ExtCarrierTplInfoDTO $extCarrierTplInfoDTO
     */
    public function setExtCarrierTplInfoDTO(ExtCarrierTplInfoDTO $extCarrierTplInfoDTO): void
    {
        $this->extCarrierTplInfoDTO = $extCarrierTplInfoDTO;
    }

    /**
     * @return ExtTemplateCouponDTO
     */
    public function getCoupon(): ExtTemplateCouponDTO
    {
        return $this->coupon;
    }

    /**
     * @param ExtTemplateCouponDTO $coupon
     */
    public function setCoupon(ExtTemplateCouponDTO $coupon): void
    {
        $this->coupon = $coupon;
    }

    /**
     * @return ExtTemplateDiscountDTO
     */
    public function getDiscount(): ExtTemplateDiscountDTO
    {
        return $this->discount;
    }

    /**
     * @param ExtTemplateDiscountDTO $discount
     */
    public function setDiscount(ExtTemplateDiscountDTO $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * @return ExtTemplatePostageDTO
     */
    public function getPostage(): ExtTemplatePostageDTO
    {
        return $this->postage;
    }

    /**
     * @param ExtTemplatePostageDTO $postage
     */
    public function setPostage(ExtTemplatePostageDTO $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return ExtTemplatePointsDTO
     */
    public function getPoints(): ExtTemplatePointsDTO
    {
        return $this->points;
    }

    /**
     * @param ExtTemplatePointsDTO $points
     */
    public function setPoints(ExtTemplatePointsDTO $points): void
    {
        $this->points = $points;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}