<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use StdClass;

/**
 * 等级重算返回值
 * @author Baymax
 * @create 2021-07-09 13:03:53.0
 */
class ExtRecalculateLevelDTO implements \JsonSerializable {

    /**
     * 操作是否成功
     * @var bool
     */
    private $isSuccess;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extensionMap;



    /**
     * @return bool
     */
    public function getIsSuccess(): ?bool
    {
        return $this->isSuccess;
    }

    /**
     * @param bool $isSuccess
     */
    public function setIsSuccess(?bool $isSuccess): void
    {
        $this->isSuccess = $isSuccess;
    }

    /**
     * @return stdClass
     */
    public function getExtensionMap(): ?stdClass
    {
        return $this->extensionMap;
    }

    /**
     * @param stdClass $extensionMap
     */
    public function setExtensionMap(?stdClass $extensionMap): void
    {
        $this->extensionMap = $extensionMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}