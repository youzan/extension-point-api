<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtCommissionCalculateResponse;

use Com\Youzan\Cloud\Extension\Param\ExtCommissionCalculateResponse\ExtItemCpsDetail;

/**
 * 销售导购佣金计算结果
 * @author Baymax
 * @create Mon Jun 06 14:05:00 CST 2022
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