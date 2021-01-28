<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Response\ExtBenefitTemplateDTO;

/**
 * 
 * @author Baymax
 * @create 2020-03-10 15:44:13.0
 */
class ExtBenefitTemplateListDTO implements \JsonSerializable {

    /**
     * 权益信息
     * @var array
     */
    private $extBenefitTemplateDTOList;



    /**
     * @return array
     */
    public function getExtBenefitTemplateDTOList(): array
    {
        return $this->extBenefitTemplateDTOList;
    }

    /**
     * @param array $extBenefitTemplateDTOList
     */
    public function setExtBenefitTemplateDTOList(array $extBenefitTemplateDTOList): void
    {
        $this->extBenefitTemplateDTOList = $extBenefitTemplateDTOList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}