<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 响应参数
 * @author Baymax
 * @create Thu May 22 14:09:05 CST 2025
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