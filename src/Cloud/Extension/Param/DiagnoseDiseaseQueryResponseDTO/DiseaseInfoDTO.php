<?php

namespace Com\Youzan\Cloud\Extension\Param\DiagnoseDiseaseQueryResponseDTO;



/**
 *  
 * @author Baymax
 * @create Tue Jun 07 11:00:15 CST 2022
 */
class DiseaseInfoDTO implements \JsonSerializable {

    /**
     *  疾病ICD编码
     * @var string
     */
    private $diseaseCode;

    /**
     *  疾病名称
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