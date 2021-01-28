<?php

namespace Com\Youzan\Cloud\Extension\Param\Xxx;

use Com\Youzan\Cloud\Extension\Param\Yyy\YYYDTO;

/**
 * 2321
 * @author Baymax
 * @create 2020-03-18 14:32:14.0
 */
class XXXDTO implements \JsonSerializable {

    /**
     * 123
     * @var YYYDTO
     */
    private $data1;

    /**
     * 231
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