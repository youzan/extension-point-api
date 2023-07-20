<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use StdClass;

/**
 * 修改等级返回值
 * @author Baymax
 * @create Tue Apr 11 20:13:21 CST 2023
 */
class ExtSetLevelDTO implements \JsonSerializable {

    /**
     * 修改是否成功
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