<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 导购业绩归因预处理信息结果
 * @author Baymax
 * @create Mon Dec 11 16:12:10 CST 2023
 */
class PreHandlePerformanceAttributionResponse implements \JsonSerializable {

    /**
     * 预处理流程版本, 默认传1；1：只做是否允许归因校验
     * @var int
     */
    private $preHandleVersion;

    /**
     * 是否允许执行归因
     * @var bool
     */
    private $allowAttribution;



    /**
     * @return int
     */
    public function getPreHandleVersion(): ?int
    {
        return $this->preHandleVersion;
    }

    /**
     * @param int $preHandleVersion
     */
    public function setPreHandleVersion(?int $preHandleVersion): void
    {
        $this->preHandleVersion = $preHandleVersion;
    }

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}