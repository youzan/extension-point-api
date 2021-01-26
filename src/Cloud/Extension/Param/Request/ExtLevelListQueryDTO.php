<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-03-10 15:44:02.0
 */
class ExtLevelListQueryDTO implements \JsonSerializable {

    /**
     * 店铺Id
     * @var int
     */
    private $kdtId;

    /**
     * 
     * @var stdClass
     */
    private $extensionMap;



    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
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