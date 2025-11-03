<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 请求结果
 * @author Baymax
 * @create Thu Jan 09 17:50:47 CST 2025
 */
class QueryPrinterStateCoBuildResponseDTO implements \JsonSerializable {

    /**
     * 0离线 1 在线
     * @var int
     */
    private $status;



    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}