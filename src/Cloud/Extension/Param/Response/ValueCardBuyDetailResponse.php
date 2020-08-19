<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Dto\ValueCardBuyDetailDTO;

/**
 * 
 * @author Baymax
 * @create Tue Mar 24 10:56:53 CST 2020
 */
class ValueCardBuyDetailResponse implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $cardBuyDetails;



    /**
     * @return array
     */
    public function getCardBuyDetails(): array
    {
        return $this->cardBuyDetails;
    }

    /**
     * @param array $cardBuyDetails
     */
    public function setCardBuyDetails(array $cardBuyDetails): void
    {
        $this->cardBuyDetails = $cardBuyDetails;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}