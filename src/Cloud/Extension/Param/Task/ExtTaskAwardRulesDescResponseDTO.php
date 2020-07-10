<?php

namespace Com\Youzan\Cloud\Extension\Param\Task;

use Com\Youzan\Cloud\Extension\Param\Task\ExtTaskAwardRulesDesc;

/**
 * 
 * @author Baymax
 * @create 2020-06-16 20:15:41.0
 */
class ExtTaskAwardRulesDescResponseDTO implements \JsonSerializable {

    /**
     * 奖励规则描述
     * @var array
     */
    private $awardRulesDescList;



    /**
     * @return array
     */
    public function getAwardRulesDescList(): array
    {
        return $this->awardRulesDescList;
    }

    /**
     * @param array $awardRulesDescList
     */
    public function setAwardRulesDescList(array $awardRulesDescList): void
    {
        $this->awardRulesDescList = $awardRulesDescList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}