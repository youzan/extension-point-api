<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;



/**
 * 
 * @author Baymax
 * @create 2019-09-10 17:07:44.0
 */
class PreTestSubParamDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $subString;



    /**
     * @return string
     */
    public function getSubString(): string
    {
        return $this->subString;
    }

    /**
     * @param string $subString
     */
    public function setSubString(string $subString): void
    {
        $this->subString = $subString;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}