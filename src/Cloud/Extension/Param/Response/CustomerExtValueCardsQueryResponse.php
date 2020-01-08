<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Dto\CustomerValueCardExtDTO;

/**
 * 
 * @author Baymax
 * @create 2020-01-06 12:52:32.0
 */
class CustomerExtValueCardsQueryResponse implements \JsonSerializable {

    /**
     * 卡列表
     * @var array
     */
    private $valueCardCustomerCards;



    /**
     * @return array
     */
    public function getValueCardCustomerCards(): array
    {
        return $this->valueCardCustomerCards;
    }

    /**
     * @param array $valueCardCustomerCards
     */
    public function setValueCardCustomerCards(array $valueCardCustomerCards): void
    {
        $this->valueCardCustomerCards = $valueCardCustomerCards;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}