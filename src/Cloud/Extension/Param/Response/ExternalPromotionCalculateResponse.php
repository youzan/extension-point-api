<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Param\BayMaxExternalPromotion;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 18:52:00 CST 2022
 */
class ExternalPromotionCalculateResponse implements \JsonSerializable {

    /**
     *  
     * @var array
     */
    private $promotions;



    /**
     * @return array
     */
    public function getPromotions(): ?array
    {
        return $this->promotions;
    }

    /**
     * @param array $promotions
     */
    public function setPromotions(?array $promotions): void
    {
        $this->promotions = $promotions;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}