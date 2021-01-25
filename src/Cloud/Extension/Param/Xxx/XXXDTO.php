<?php

namespace Com\Youzan\Cloud\Extension\Param\Xxx;

use Com\Youzan\Cloud\Extension\Param\Yyy\YYYDTO;

/**
 * 
 * @author Baymax
 * @create Wed Mar 18 14:32:14 CST 2020
 */
class XXXDTO implements \JsonSerializable {

    /**
     * 
     * @var YYYDTO
     */
    private $data1;

    /**
     * 
     * @var string
     */
    private $data2;



    /**
     * @return YYYDTO
     */
    public function getData1(): YYYDTO
    {
        return $this->data1;
    }

    /**
     * @param YYYDTO $data1
     */
    public function setData1(YYYDTO $data1): void
    {
        $this->data1 = $data1;
    }

    /**
     * @return string
     */
    public function getData2(): string
    {
        return $this->data2;
    }

    /**
     * @param string $data2
     */
    public function setData2(string $data2): void
    {
        $this->data2 = $data2;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}