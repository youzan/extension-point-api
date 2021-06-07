<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 校验结果
 * @author Baymax
 * @create 2021-03-15 14:39:48.0
 */
class ImktValidateResult implements \JsonSerializable {

    /**
     * 是否通过外部校验
     * @var bool
     */
    private $validateResult;



    /**
     * @return bool
     */
    public function getValidateResult(): ?bool
    {
        return $this->validateResult;
    }

    /**
     * @param bool $validateResult
     */
    public function setValidateResult(?bool $validateResult): void
    {
        $this->validateResult = $validateResult;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}