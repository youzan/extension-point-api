<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use StdClass;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 18:52:00 CST 2022
 */
class PromotionTipsEffect implements \JsonSerializable {

    /**
     *  
     * @var stdClass
     */
    private $exhibitResultMap;



    /**
     * @return stdClass
     */
    public function getExhibitResultMap(): ?stdClass
    {
        return $this->exhibitResultMap;
    }

    /**
     * @param stdClass $exhibitResultMap
     */
    public function setExhibitResultMap(?stdClass $exhibitResultMap): void
    {
        $this->exhibitResultMap = $exhibitResultMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}