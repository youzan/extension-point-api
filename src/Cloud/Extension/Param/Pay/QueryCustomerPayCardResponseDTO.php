<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\CustomerPayCardDTO;

/**
 *  
 * @author Baymax
 * @create Mon Mar 14 17:35:47 CST 2022
 */
class QueryCustomerPayCardResponseDTO implements \JsonSerializable {

    /**
     *  
     * @var array
     */
    private $cardList;



    /**
     * @return array
     */
    public function getCardList(): ?array
    {
        return $this->cardList;
    }

    /**
     * @param array $cardList
     */
    public function setCardList(?array $cardList): void
    {
        $this->cardList = $cardList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}