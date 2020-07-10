<?php

namespace Com\Youzan\Cloud\Extension\Param\Task;

use Com\Youzan\Cloud\Extension\Param\Task\ExtTaskAwardSendRule;

/**
 * 
 * @author Baymax
 * @create 2020-06-08 13:28:28.0
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
    public function getTaskAwardSendRules(): array
    {
        return $this->taskAwardSendRules;
    }

    /**
     * @param array $taskAwardSendRules
     */
    public function setTaskAwardSendRules(array $taskAwardSendRules): void
    {
        $this->taskAwardSendRules = $taskAwardSendRules;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}