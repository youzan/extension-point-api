<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\TradeItemDTO;
use Com\Youzan\Cloud\Extension\Param\UsedPro;

/**
 * 交易分组信息
 * @author Baymax
 * @create Mon Feb 26 17:14:35 CST 2024
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
     * （字段在2022年3月31日下线，请使用usedGroupPros对接，已对接开发者请尽快调整）使用的优惠券
     * @var UsedPro
     */
    private $usedPro;

    /**
     * 使用的优惠券，支持优惠券叠加
     * @var array
     */
    private $usedGroupPros;



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

    /**
     * @return UsedPro
     */
    public function getUsedPro(): ?UsedPro
    {
        return $this->usedPro;
    }

    /**
     * @param UsedPro $usedPro
     */
    public function setUsedPro(?UsedPro $usedPro): void
    {
        $this->usedPro = $usedPro;
    }

    /**
     * @return array
     */
    public function getUsedGroupPros(): ?array
    {
        return $this->usedGroupPros;
    }

    /**
     * @param array $usedGroupPros
     */
    public function setUsedGroupPros(?array $usedGroupPros): void
    {
        $this->usedGroupPros = $usedGroupPros;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}