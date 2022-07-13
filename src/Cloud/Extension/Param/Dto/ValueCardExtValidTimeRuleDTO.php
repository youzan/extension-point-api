<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use DateTime;

/**
 * 卡模板有效期设置
 * @author Baymax
 * @create Mon Mar 14 19:16:10 CST 2022
 */
class ValueCardExtValidTimeRuleDTO implements \JsonSerializable {

    /**
     * 过期类型 0 永久有效 1 具体日期 2 年份
     * @var int
     */
    private $termType;

    /**
     * 到期值，当termType为2时，值代表年份
     * @var int
     */
    private $termValue;

    /**
     * 到期时间
     * @var int
     */
    private $termEndAt;



    /**
     * @return int
     */
    public function getTermType(): ?int
    {
        return $this->termType;
    }

    /**
     * @param int $termType
     */
    public function setTermType(?int $termType): void
    {
        $this->termType = $termType;
    }

    /**
     * @return int
     */
    public function getTermValue(): ?int
    {
        return $this->termValue;
    }

    /**
     * @param int $termValue
     */
    public function setTermValue(?int $termValue): void
    {
        $this->termValue = $termValue;
    }

    /**
     * @return int
     */
    public function getTermEndAt(): ?int
    {
        return $this->termEndAt;
    }

    /**
     * @param int $termEndAt
     */
    public function setTermEndAt(?int $termEndAt): void
    {
        $this->termEndAt = $termEndAt;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}