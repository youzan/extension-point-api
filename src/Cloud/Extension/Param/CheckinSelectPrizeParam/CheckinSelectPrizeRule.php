<?php

namespace Com\Youzan\Cloud\Extension\Param\CheckinSelectPrizeParam;



/**
 * {}
 * @author Baymax
 * @create Thu Jan 13 20:34:38 CST 2022
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