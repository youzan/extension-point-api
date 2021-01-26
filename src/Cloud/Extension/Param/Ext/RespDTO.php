<?php

namespace Com\Youzan\Cloud\Extension\Param\Ext;



/**
 * test实打实大师
 * @author Baymax
 * @create 2020-03-18 14:45:32.0
 */
class RespDTO implements \JsonSerializable {

    /**
     * test
     * @var string
     */
    private $result;



    /**
     * @return string
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * @param string $result
     */
    public function setResult(?string $result): void
    {
        $this->result = $result;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}