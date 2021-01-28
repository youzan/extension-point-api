<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create 2018-10-08 16:18:50.0
 */
class RefundSelfValidateResultDTO implements \JsonSerializable {

    /**
     * 校验结果信息
     * @var string
     */
    private $message;

    /**
     * 校验结果
     * @var bool
     */
    private $validateResult;



    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return bool
     */
    public function getValidateResult(): bool
    {
        return $this->validateResult;
    }

    /**
     * @param bool $validateResult
     */
    public function setValidateResult(bool $validateResult): void
    {
        $this->validateResult = $validateResult;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}