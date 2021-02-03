<?php

namespace Com\Youzan\Cloud\Extension\Param\Yyy;



/**
 * 123
 * @author Baymax
 * @create 2020-03-18 14:32:14.0
 */
class YYYDTO implements \JsonSerializable {

    /**
     * 232
     * @var string
     */
    private $data345;



    /**
     * @return string
     */
    public function getData345(): string
    {
        return $this->data345;
    }

    /**
     * @param string $data345
     */
    public function setData345(string $data345): void
    {
        $this->data345 = $data345;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}