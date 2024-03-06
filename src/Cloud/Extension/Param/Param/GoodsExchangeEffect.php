<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Param\ExchangeGoods;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 14:25:04 CST 2022
 */
class GoodsExchangeEffect implements \JsonSerializable {

    /**
     *  
     * @var array
     */
    private $exchangeGoodsList;



    /**
     * @return array
     */
    public function getExchangeGoodsList(): ?array
    {
        return $this->exchangeGoodsList;
    }

    /**
     * @param array $exchangeGoodsList
     */
    public function setExchangeGoodsList(?array $exchangeGoodsList): void
    {
        $this->exchangeGoodsList = $exchangeGoodsList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}