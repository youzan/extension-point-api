<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Param\ImktJoinContext;
use Com\Youzan\Cloud\Extension\Param\Param\ImktJoinRunningData;

/**
 * 互动C端参与流程校验扩展点参数
 * @author Baymax
 * @create 2021-03-15 14:39:48.0
 */
class ImktValidateBepParam implements \JsonSerializable {

    /**
     * 参与流程上下文信息
     * @var ImktJoinContext
     */
    private $imktJoinContext;

    /**
     * 运行时数据
     * @var ImktJoinRunningData
     */
    private $imktJoinRunningData;

    /**
     * 外部规则（JSON格式的字符串，内部结构由外部自行定义，推荐使用Map&amp;lt;String, Object&amp;gt;）
     * @var string
     */
    private $externalRule;



    /**
     * @return ImktJoinContext
     */
    public function getImktJoinContext(): ?ImktJoinContext
    {
        return $this->imktJoinContext;
    }

    /**
     * @param ImktJoinContext $imktJoinContext
     */
    public function setImktJoinContext(?ImktJoinContext $imktJoinContext): void
    {
        $this->imktJoinContext = $imktJoinContext;
    }

    /**
     * @return ImktJoinRunningData
     */
    public function getImktJoinRunningData(): ?ImktJoinRunningData
    {
        return $this->imktJoinRunningData;
    }

    /**
     * @param ImktJoinRunningData $imktJoinRunningData
     */
    public function setImktJoinRunningData(?ImktJoinRunningData $imktJoinRunningData): void
    {
        $this->imktJoinRunningData = $imktJoinRunningData;
    }

    /**
     * @return string
     */
    public function getExternalRule(): ?string
    {
        return $this->externalRule;
    }

    /**
     * @param string $externalRule
     */
    public function setExternalRule(?string $externalRule): void
    {
        $this->externalRule = $externalRule;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}