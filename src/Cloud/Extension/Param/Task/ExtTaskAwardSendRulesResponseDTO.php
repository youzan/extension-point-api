<?php

namespace Com\Youzan\Cloud\Extension\Param\Task;

use Com\Youzan\Cloud\Extension\Param\Task\ExtTaskAwardSendRule;

/**
 *  
 * @author Baymax
 * @create Mon Mar 14 16:49:27 CST 2022
 */
class ExtTaskAwardSendRulesResponseDTO implements \JsonSerializable {

    /**
     *  
     * @var array
     */
    private $taskAwardSendRules;



    /**
     * @return array
     */
    public function getTaskAwardSendRules(): ?array
    {
        return $this->taskAwardSendRules;
    }

    /**
     * @param array $taskAwardSendRules
     */
    public function setTaskAwardSendRules(?array $taskAwardSendRules): void
    {
        $this->taskAwardSendRules = $taskAwardSendRules;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}