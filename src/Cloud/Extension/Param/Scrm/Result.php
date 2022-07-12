<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 *  
 * @author Baymax
 * @create Fri Feb 11 14:15:14 CST 2022
 */
class Result implements \JsonSerializable {

    /**
     * 是否成功 true表示成功 false表示失败
     * @var bool
     */
    private $data;



    /**
     * @return bool
     */
    public function getData(): ?bool
    {
        return $this->data;
    }

    /**
     * @param bool $data
     */
    public function setData(?bool $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}