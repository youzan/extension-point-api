<?php

namespace Com\Youzan\Cloud\Extension\Param\Cloud;



/**
 * 响应体
 * @author Baymax
 * @create 2021-07-05 20:45:27.0
 */
class DeliveryToWechatProcessResponse implements \JsonSerializable {

    /**
     * 处理结果
     * @var bool
     */
    private $isSuccess;

    /**
     * 消息内容
     * @var string
     */
    private $message;

    /**
     * 消息码
     * @var int
     */
    private $code;



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

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return int
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(?int $code): void
    {
        $this->code = $code;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}