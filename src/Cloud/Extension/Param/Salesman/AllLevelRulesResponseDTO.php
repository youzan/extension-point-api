<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;

use Com\Youzan\Cloud\Extension\Param\Salesman\ExtLevelRulesResponseDTO;

/**
 * 
 * @author Baymax
 * @create Sun Apr 28 16:00:27 CST 2019
 */
class AllLevelRulesResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $extLevelRulesResponseDTO;



    /**
     * @return array
     */
    public function getExtLevelRulesResponseDTO(): array
    {
        return $this->extLevelRulesResponseDTO;
    }

    /**
     * @param array $extLevelRulesResponseDTO
     */
    public function setExtLevelRulesResponseDTO(array $extLevelRulesResponseDTO): void
    {
        $this->extLevelRulesResponseDTO = $extLevelRulesResponseDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}