<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\TradeItemDTO;

/**
 * 交易分组信息
 * @author Baymax
 * @create Tue Mar 26 13:18:47 CST 2019
 */
class TradeGroupDTO implements \JsonSerializable {

    /**
     * 交易条目
     * @var array
     */
    private $tradeItemDTOGroup;



    /**
     * @return array
     */
    public function getTradeItemDTOGroup(): ?array
    {
        return $this->tradeItemDTOGroup;
    }

    /**
     * @param array $tradeItemDTOGroup
     */
    public function setTradeItemDTOGroup(?array $tradeItemDTOGroup): void
    {
        $this->tradeItemDTOGroup = $tradeItemDTOGroup;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}