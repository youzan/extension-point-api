<?php

namespace Com\Youzan\Cloud\Extension\Param\CheckinSelectPrizeParam;



/**
 * {}
 * @author Baymax
 * @create 2021-06-28 23:33:49.0
 */
class CheckinSelectPrizeRule implements \JsonSerializable {

    /**
     * 自定义选奖规则
     * @var string
     */
    private $externalSelectPrizeRule;

    /**
     * 奖品id列表
     * @var array
     */
    private $prizeConfigIds;



    /**
     * @return string
     */
    public function getExternalSelectPrizeRule(): ?string
    {
        return $this->externalSelectPrizeRule;
    }

    /**
     * @param string $externalSelectPrizeRule
     */
    public function setExternalSelectPrizeRule(?string $externalSelectPrizeRule): void
    {
        $this->externalSelectPrizeRule = $externalSelectPrizeRule;
    }

    /**
     * @return array
     */
    public function getPrizeConfigIds(): ?array
    {
        return $this->prizeConfigIds;
    }

    /**
     * @param array $prizeConfigIds
     */
    public function setPrizeConfigIds(?array $prizeConfigIds): void
    {
        $this->prizeConfigIds = $prizeConfigIds;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}