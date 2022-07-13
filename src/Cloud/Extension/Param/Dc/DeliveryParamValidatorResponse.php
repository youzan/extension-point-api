<?php

namespace Com\Youzan\Cloud\Extension\Param\Dc;



/**
 * 发货校验结果对象
 * @author Baymax
 * @create Thu Jan 13 20:41:46 CST 2022
 */
class DeliveryParamValidatorResponse implements \JsonSerializable {

    /**
     * 是否校验通过
     * @var bool
     */
    private $validateResult;

    /**
     * 校验信息
     * @var string
     */
    private $message;

    /**
     * 校验编码
     * @var int
     */
    private $code;



    /**
     * @return bool
     */
    public function getValidateResult(): ?bool
    {
        return $this->validateResult;
    }

    /**
     * @param bool $validateResult
     */
    public function setValidateResult(?bool $validateResult): void
    {
        $this->validateResult = $validateResult;
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