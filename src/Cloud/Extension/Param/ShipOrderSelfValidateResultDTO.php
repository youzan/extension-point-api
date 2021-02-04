<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create 2018-10-08 14:51:19.0
 */
class ShipOrderSelfValidateResultDTO implements \JsonSerializable {

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
     * 
     * @var int
     */
    private $tea;

    /**
     * 
     * @var string
     */
    private $test;



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
     * @return int
     */
    public function getTea(): ?int
    {
        return $this->tea;
    }

    /**
     * @param int $tea
     */
    public function setTea(?int $tea): void
    {
        $this->tea = $tea;
    }

    /**
     * @return string
     */
    public function getTest(): ?string
    {
        return $this->test;
    }

    /**
     * @param string $test
     */
    public function setTest(?string $test): void
    {
        $this->test = $test;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}