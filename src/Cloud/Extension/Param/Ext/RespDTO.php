<?php

namespace Com\Youzan\Cloud\Extension\Param\Ext;



/**
 * 返回值
 * @author Baymax
 * @create 2020-03-18 14:45:32.0
 */
class RespDTO implements \JsonSerializable {

    /**
     * 23121sadas
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