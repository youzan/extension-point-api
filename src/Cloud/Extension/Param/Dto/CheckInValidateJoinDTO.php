<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 校验结果
 * @author Baymax
 * @create Fri Sep 08 17:14:48 CST 2023
 */
class CheckInValidateJoinDTO implements \JsonSerializable {

    /**
     * 校验结果。true为通过，允许继续进行签到流程；false为不通过，阻断签到流程
     * @var bool
     */
    private $validateResult;

    /**
     * 返回文案。校验结果为失败时，会在前端弹出该文案。
     * @var string
     */
    private $copyWriting;



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
    public function getCopyWriting(): ?string
    {
        return $this->copyWriting;
    }

    /**
     * @param string $copyWriting
     */
    public function setCopyWriting(?string $copyWriting): void
    {
        $this->copyWriting = $copyWriting;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}