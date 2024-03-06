<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * {}
 * @author Baymax
 * @create Thu Jan 13 20:34:38 CST 2022
 */
class CheckinSelectPrizeDTO implements \JsonSerializable {

    /**
     * 选出的奖品id列表
     * @var array
     */
    private $selectedPrizeConfigId;



    /**
     * @return array
     */
    public function getSelectedPrizeConfigId(): ?array
    {
        return $this->selectedPrizeConfigId;
    }

    /**
     * @param array $selectedPrizeConfigId
     */
    public function setSelectedPrizeConfigId(?array $selectedPrizeConfigId): void
    {
        $this->selectedPrizeConfigId = $selectedPrizeConfigId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}