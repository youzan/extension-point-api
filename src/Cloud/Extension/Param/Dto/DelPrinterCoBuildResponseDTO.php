<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 返回结果
 * @author Baymax
 * @create Thu Jan 09 17:38:21 CST 2025
 */
class DelPrinterCoBuildResponseDTO implements \JsonSerializable {

    /**
     * 是否删除成功
     * @var bool
     */
    private $status;



    /**
     * @return bool
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     */
    public function setStatus(?bool $status): void
    {
        $this->status = $status;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}