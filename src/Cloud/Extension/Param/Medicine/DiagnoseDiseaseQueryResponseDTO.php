<?php

namespace Com\Youzan\Cloud\Extension\Param\Medicine;

use Com\Youzan\Cloud\Extension\Param\DiagnoseDiseaseQueryResponseDTO\DiseaseInfoDTO;

/**
 * 
 * @author Baymax
 * @create 2021-04-11 16:24:33.0
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