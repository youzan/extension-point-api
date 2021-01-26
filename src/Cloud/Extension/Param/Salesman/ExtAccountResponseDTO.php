<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create 2019-04-12 20:40:48.0
 */
class ExtAccountResponseDTO implements \JsonSerializable {

    /**
     * 是否成功 ture表示成功 false表示失败
     * @var bool
     */
    private $salesman;



    /**
     * @return bool
     */
    public function getSalesman(): ?bool
    {
        return $this->salesman;
    }

    /**
     * @param bool $salesman
     */
    public function setSalesman(?bool $salesman): void
    {
        $this->salesman = $salesman;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}