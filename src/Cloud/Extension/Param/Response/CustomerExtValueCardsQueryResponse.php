<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Dto\CustomerValueCardExtDTO;

/**
 *  
 * @author Baymax
 * @create Thu Aug 11 20:19:10 CST 2022
 */
class CustomerExtValueCardsQueryResponse implements \JsonSerializable {

    /**
     *  
     * @var array
     */
    private $valueCardCustomerCards;

    /**
     * 数据总条数，用于分页
     * @var int
     */
    private $totalNum;



    /**
     * @return array
     */
    public function getValueCardCustomerCards(): ?array
    {
        return $this->valueCardCustomerCards;
    }

    /**
     * @param array $valueCardCustomerCards
     */
    public function setValueCardCustomerCards(?array $valueCardCustomerCards): void
    {
        $this->valueCardCustomerCards = $valueCardCustomerCards;
    }

    /**
     * @return int
     */
    public function getTotalNum(): ?int
    {
        return $this->totalNum;
    }

    /**
     * @param int $totalNum
     */
    public function setTotalNum(?int $totalNum): void
    {
        $this->totalNum = $totalNum;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}