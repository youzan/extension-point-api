<?php

namespace Com\Youzan\Cloud\Extension\Param\DiagnoseDiseaseQueryResponseDTO;



/**
 * 
 * @author Baymax
 * @create 2021-04-11 16:24:33.0
 */
class DiseaseInfoDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $diseaseCode;

    /**
     * 
     * @var string
     */
    private $diseaseName;



    /**
     * @return string
     */
    public function getDiseaseCode(): ?string
    {
        return $this->diseaseCode;
    }

    /**
     * @param string $diseaseCode
     */
    public function setDiseaseCode(?string $diseaseCode): void
    {
        $this->diseaseCode = $diseaseCode;
    }

    /**
     * @return string
     */
    public function getDiseaseName(): ?string
    {
        return $this->diseaseName;
    }

    /**
     * @param string $diseaseName
     */
    public function setDiseaseName(?string $diseaseName): void
    {
        $this->diseaseName = $diseaseName;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}