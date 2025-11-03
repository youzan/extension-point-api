<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 查询用户成长值返回值
 * @author Baymax
 * @create Wed Jul 23 16:39:10 CST 2025
 */
class ExtCustomerGrowthStatusDTO implements \JsonSerializable {

    /**
     * 当前成长值
     * @var int
     */
    private $currentGrowth;

    /**
     * 累计成长值
     * @var int
     */
    private $totalGrowth;



    /**
     * @return int
     */
    public function getCurrentGrowth(): ?int
    {
        return $this->currentGrowth;
    }

    /**
     * @param int $currentGrowth
     */
    public function setCurrentGrowth(?int $currentGrowth): void
    {
        $this->currentGrowth = $currentGrowth;
    }

    /**
     * @return int
     */
    public function getTotalGrowth(): ?int
    {
        return $this->totalGrowth;
    }

    /**
     * @param int $totalGrowth
     */
    public function setTotalGrowth(?int $totalGrowth): void
    {
        $this->totalGrowth = $totalGrowth;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}