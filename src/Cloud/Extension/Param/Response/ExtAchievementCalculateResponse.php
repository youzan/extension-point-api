<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\ExtAchievementCalculateResponse\ExtGuideAchievement;

/**
 * 响应数据
 * @author Baymax
 * @create Mon Mar 31 11:21:07 CST 2025
 */
class ExtAchievementCalculateResponse implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 单据号，返回入参中的单据号即可
     * @var string
     */
    private $bizNo;

    /**
     * 单据类型，1.支付订单，2.退款订单, 3.无原单退款单
     * @var int
     */
    private $bizType;

    /**
     * 销售业绩数据，只要有销售导购id，就必须返回该数据，无销售导购id时返回为null即可
     * @var ExtGuideAchievement
     */
    private $salesGuideAchievement;

    /**
     * 专属业绩数据，只要有专属导购id，就必须返回该数据，无专属导购id时返回为null即可
     * @var ExtGuideAchievement
     */
    private $serviceGuideAchievement;



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
     * @return ExtGuideAchievement
     */
    public function getSalesGuideAchievement(): ?ExtGuideAchievement
    {
        return $this->salesGuideAchievement;
    }

    /**
     * @param ExtGuideAchievement $salesGuideAchievement
     */
    public function setSalesGuideAchievement(?ExtGuideAchievement $salesGuideAchievement): void
    {
        $this->salesGuideAchievement = $salesGuideAchievement;
    }

    /**
     * @return ExtGuideAchievement
     */
    public function getServiceGuideAchievement(): ?ExtGuideAchievement
    {
        return $this->serviceGuideAchievement;
    }

    /**
     * @param ExtGuideAchievement $serviceGuideAchievement
     */
    public function setServiceGuideAchievement(?ExtGuideAchievement $serviceGuideAchievement): void
    {
        $this->serviceGuideAchievement = $serviceGuideAchievement;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}