<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 
 * @author Baymax
 * @create Tue Apr 30 10:55:07 CST 2019
 */
class QueryValueCardBalanceRequestDTO implements \JsonSerializable {

    /**
     * 卡号列表
     * @var array
     */
    private $cardNoList;



    /**
     * @return array
     */
    public function getCardNoList(): array
    {
        return $this->cardNoList;
    }

    /**
     * @param array $cardNoList
     */
    public function setCardNoList(array $cardNoList): void
    {
        $this->cardNoList = $cardNoList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}