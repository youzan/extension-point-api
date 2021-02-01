<?php

namespace Com\Youzan\Cloud\Extension\Param\Account;



/**
 * 
 * @author Baymax
 * @create 2020-10-13 17:48:00.0
 */
class ExtAccountApplyCheckResponseDTO implements \JsonSerializable {

    /**
     * 自定义检查结果，true：校验通过，false校验不通过
     * @var bool
     */
    private $checkResult;

    /**
     * 检查结果信息。如果校验不通过，需要返回不通过原因
     * @var string
     */
    private $checkResultMessage;



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
    public function getCheckResultMessage(): ?string
    {
        return $this->checkResultMessage;
    }

    /**
     * @param string $checkResultMessage
     */
    public function setCheckResultMessage(?string $checkResultMessage): void
    {
        $this->checkResultMessage = $checkResultMessage;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}