<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Info\PromotionItemDecreaseInfo;

/**
 * 
 * @author Baymax
 * @create 2021-07-08 11:43:47.0
 */
class GoodsPromotionComputeResp implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $totalDecrease;

    /**
     * 
     * @var array
     */
    private $promotionItemDecreaseInfoList;



    /**
     * @return int
     */
    public function getTotalDecrease(): ?int
    {
        return $this->totalDecrease;
    }

    /**
     * @param int $totalDecrease
     */
    public function setTotalDecrease(?int $totalDecrease): void
    {
        $this->totalDecrease = $totalDecrease;
    }

    /**
     * @return array
     */
    public function getPromotionItemDecreaseInfoList(): ?array
    {
        return $this->promotionItemDecreaseInfoList;
    }

    /**
     * @param array $promotionItemDecreaseInfoList
     */
    public function setPromotionItemDecreaseInfoList(?array $promotionItemDecreaseInfoList): void
    {
        $this->promotionItemDecreaseInfoList = $promotionItemDecreaseInfoList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}