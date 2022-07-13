<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 这是入参描述
 * @author Baymax
 * @create Tue Dec 28 22:31:51 CST 2021
 */
class WoodpeckerRequest implements \JsonSerializable {

    /**
     * Boolean类型参数的入参描述-1
     * @var bool
     */
    private $booleanParam;

    /**
     * String类型参数的入参描述-1
     * @var string
     */
    private $stringParam;



    /**
     * @return bool
     */
    public function getBooleanParam(): ?bool
    {
        return $this->booleanParam;
    }

    /**
     * @param bool $booleanParam
     */
    public function setBooleanParam(?bool $booleanParam): void
    {
        $this->booleanParam = $booleanParam;
    }

    /**
     * @return string
     */
    public function getStringParam(): ?string
    {
        return $this->stringParam;
    }

    /**
     * @param string $stringParam
     */
    public function setStringParam(?string $stringParam): void
    {
        $this->stringParam = $stringParam;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}