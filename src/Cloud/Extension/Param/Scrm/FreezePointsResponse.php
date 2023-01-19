<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 响应参数
 * @author Baymax
 * @create Tue Jan 10 11:43:19 CST 2023
 */
class FreezePointsResponse implements \JsonSerializable {

    /**
     * 是否成功 ture表示成功 false表示失败
     * @var bool
     */
    private $isSuccess;



    /**
     * @return bool
     */
    public function getIsSuccess(): ?bool
    {
        return $this->isSuccess;
    }

    /**
     * @param bool $isSuccess
     */
    public function setIsSuccess(?bool $isSuccess): void
    {
        $this->isSuccess = $isSuccess;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}