<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use Java\Lang\String;

/**
 * 请求参数
 * @author Baymax
 * @create Thu Feb 10 13:06:13 CST 2022
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
    public function getCardNoList(): ?array
    {
        return $this->cardNoList;
    }

    /**
     * @param array $cardNoList
     */
    public function setCardNoList(?array $cardNoList): void
    {
        $this->cardNoList = $cardNoList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}