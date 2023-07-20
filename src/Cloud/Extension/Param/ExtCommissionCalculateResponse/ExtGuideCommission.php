<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtCommissionCalculateResponse;

use Com\Youzan\Cloud\Extension\Param\ExtCommissionCalculateResponse\ExtItemCpsDetail;

/**
 * 销售导购佣金计算结果
 * @author Baymax
 * @create Fri Mar 03 17:34:00 CST 2023
 */
class ExtGuideCommission implements \JsonSerializable {

    /**
     * 是否算佣金
     * @var bool
     */
    private $hasCommission;

    /**
     * 导购佣金计算明细
     * @var array
     */
    private $guideItemCpsDetail;



    /**
     * @return bool
     */
    public function getHasCommission(): ?bool
    {
        return $this->hasCommission;
    }

    /**
     * @param bool $hasCommission
     */
    public function setHasCommission(?bool $hasCommission): void
    {
        $this->hasCommission = $hasCommission;
    }

    /**
     * @return array
     */
    public function getGuideItemCpsDetail(): ?array
    {
        return $this->guideItemCpsDetail;
    }

    /**
     * @param array $guideItemCpsDetail
     */
    public function setGuideItemCpsDetail(?array $guideItemCpsDetail): void
    {
        $this->guideItemCpsDetail = $guideItemCpsDetail;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}