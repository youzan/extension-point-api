<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 返回数据
 * @author Baymax
 * @create Thu Jan 16 17:33:31 CST 2025
 */
class AddPrinterCoBuildResponseDTO implements \JsonSerializable {

    /**
     * 打印机添加是否成功 true 成功 false失败
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