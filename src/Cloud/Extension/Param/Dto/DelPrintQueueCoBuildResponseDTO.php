<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 返回数据
 * @author Baymax
 * @create Thu Jan 09 17:43:45 CST 2025
 */
class DelPrintQueueCoBuildResponseDTO implements \JsonSerializable {

    /**
     * 执行结果，true 清空成功，false 清空失败
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