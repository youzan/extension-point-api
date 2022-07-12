<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 调用返回的数据
 * @author Baymax
 * @create Tue Dec 28 22:31:51 CST 2021
 */
class WoodpeckerResponse implements \JsonSerializable {

    /**
     * string_result-说明-1
     * @var string
     */
    private $stringResult;



    /**
     * @return string
     */
    public function getStringResult(): ?string
    {
        return $this->stringResult;
    }

    /**
     * @param string $stringResult
     */
    public function setStringResult(?string $stringResult): void
    {
        $this->stringResult = $stringResult;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}