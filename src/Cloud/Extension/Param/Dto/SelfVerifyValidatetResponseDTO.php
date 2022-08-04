<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 *  
 * @author Baymax
 * @create Sat Jul 30 23:30:58 CST 2022
 */
class SelfVerifyValidatetResponseDTO implements \JsonSerializable {

    /**
     * 校验结果；false-校验失败，终止核销流程；true-校验成功，继续进行核销
     * @var bool
     */
    private $validateResult;

    /**
     * 校验失败的原因；会将该原因直接展示给用户
     * @var string
     */
    private $message;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}