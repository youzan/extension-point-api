<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 响应参数
 * @author Baymax
 * @create Tue Jul 05 15:11:20 CST 2022
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