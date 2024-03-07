<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 返回结果
 * @author Baymax
 * @create Tue Apr 04 17:41:46 CST 2023
 */
class SpuIntroductionItemCheckResponse implements \JsonSerializable {

    /**
     * 是否校验通过
     * @var bool
     */
    private $checkResult;

    /**
     * 提示信息
     * @var string
     */
    private $promptMessage;



    /**
     * @return bool
     */
    public function getCheckResult(): ?bool
    {
        return $this->checkResult;
    }

    /**
     * @param bool $checkResult
     */
    public function setCheckResult(?bool $checkResult): void
    {
        $this->checkResult = $checkResult;
    }

    /**
     * @return string
     */
    public function getPromptMessage(): ?string
    {
        return $this->promptMessage;
    }

    /**
     * @param string $promptMessage
     */
    public function setPromptMessage(?string $promptMessage): void
    {
        $this->promptMessage = $promptMessage;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}