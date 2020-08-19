<?php

namespace Com\Youzan\Cloud\Extension\Param\Yyy;



/**
 * 
 * @author Baymax
 * @create 2020-03-18 14:32:14.0
 */
class YYYDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $data3;



    /**
     * @return string
     */
    public function getData3(): string
    {
        return $this->data3;
    }

    /**
     * @param string $data3
     */
    public function setData3(string $data3): void
    {
        $this->data3 = $data3;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}