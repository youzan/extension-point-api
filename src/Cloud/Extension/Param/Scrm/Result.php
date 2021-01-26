<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 
 * @author Baymax
 * @create Sat Sep 29 21:13:57 CST 2018
 */
class Result implements \JsonSerializable {

    /**
     * 是否成功 ture表示成功 false表示失败
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