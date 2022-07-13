<?php

namespace Com\Youzan\Cloud\Extension\Param\Medicine;

use Com\Youzan\Cloud\Extension\Param\DiagnoseDiseaseQueryResponseDTO\DiseaseInfoDTO;

/**
 *  
 * @author Baymax
 * @create Tue Jun 07 11:00:15 CST 2022
 */
class DiagnoseDiseaseQueryResponseDTO implements \JsonSerializable {

    /**
     *  
     * @var array
     */
    private $diseaseInfoDTOS;



    /**
     * @return array
     */
    public function getDiseaseInfoDTOS(): ?array
    {
        return $this->diseaseInfoDTOS;
    }

    /**
     * @param array $diseaseInfoDTOS
     */
    public function setDiseaseInfoDTOS(?array $diseaseInfoDTOS): void
    {
        $this->diseaseInfoDTOS = $diseaseInfoDTOS;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}