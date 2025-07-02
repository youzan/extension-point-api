<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 返回数据
 * @author Baymax
 * @create Wed Jan 15 11:14:55 CST 2025
 */
class PrintReceiptCoBuildResponseDTO implements \JsonSerializable {

    /**
     * 执行结果，true 打印任务生成成功，false 生成失败
     * @var bool
     */
    private $status;

    /**
     * 打印任务编号
     * @var string
     */
    private $orderId;



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

    /**
     * @return string
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     */
    public function setOrderId(?string $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}