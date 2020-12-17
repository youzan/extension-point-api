<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 
 * @author Baymax
 * @create 2018-09-29 21:13:57.0
 */
class Result implements \JsonSerializable {

    /**
     * 是否成功 ture表示成功 false表示失败
     * @var bool
     */
    private $IsSuccess;



    /**
     * @return bool
     */
    public function getIsSuccess(): bool
    {
        return $this->IsSuccess;
    }

    /**
     * @param bool $IsSuccess
     */
    public function setIsSuccess(bool $IsSuccess): void
    {
        $this->IsSuccess = $IsSuccess;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}