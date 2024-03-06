<?php

namespace Com\Youzan\Cloud\Extension\Param\Cps;



/**
 * 返参
 * @author Baymax
 * @create Thu May 18 19:21:53 CST 2023
 */
class ExtAttributionResponse implements \JsonSerializable {

    /**
     * 是否允许归因
     * @var bool
     */
    private $allowAttribution;

    /**
     * 不允许归因的原因
     * @var string
     */
    private $notAllowReason;



    /**
     * @return bool
     */
    public function getAllowAttribution(): ?bool
    {
        return $this->allowAttribution;
    }

    /**
     * @param bool $allowAttribution
     */
    public function setAllowAttribution(?bool $allowAttribution): void
    {
        $this->allowAttribution = $allowAttribution;
    }

    /**
     * @return string
     */
    public function getNotAllowReason(): ?string
    {
        return $this->notAllowReason;
    }

    /**
     * @param string $notAllowReason
     */
    public function setNotAllowReason(?string $notAllowReason): void
    {
        $this->notAllowReason = $notAllowReason;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}