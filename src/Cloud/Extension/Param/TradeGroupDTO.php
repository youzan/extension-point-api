<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\TradeItemDTO;

/**
 * 交易分组信息
 * @author Baymax
 * @create 2019-03-26 13:18:47.0
 */
class TradeGroupDTO implements \JsonSerializable {

    /**
     * 交易条目
     * @var array
     */
    private $tradeItemDTOGroup;

    /**
     * 自提码id
     * @var string
     */
    private $selfFetchId;



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

    /**
     * @return string
     */
    public function getSelfFetchId(): ?string
    {
        return $this->selfFetchId;
    }

    /**
     * @param string $selfFetchId
     */
    public function setSelfFetchId(?string $selfFetchId): void
    {
        $this->selfFetchId = $selfFetchId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}