<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\Request\ExtCarrierTplInfoDTO;

/**
 * 
 * @author Baymax
 * @create 2020-03-10 15:44:13.0
 */
class ExtBenefitTemplateBatchGetDTO implements \JsonSerializable {

    /**
     * 载体信息
     * @var array
     */
    private $carrierInfoList;



    /**
     * @return array
     */
    public function getCarrierInfoList(): ?array
    {
        return $this->carrierInfoList;
    }

    /**
     * @param array $carrierInfoList
     */
    public function setCarrierInfoList(?array $carrierInfoList): void
    {
        $this->carrierInfoList = $carrierInfoList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}