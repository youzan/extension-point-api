<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-03-10 15:43:58.0
 */
class ExtBatchLevelQueryDTO implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $levelAliasSet;

    /**
     * 
     * @var string
     */
    private $bizTrafficId;

    /**
     * 
     * @var stdClass
     */
    private $extensionMap;



    /**
     * @return array
     */
    public function getLevelAliasSet(): array
    {
        return $this->levelAliasSet;
    }

    /**
     * @param array $levelAliasSet
     */
    public function setLevelAliasSet(array $levelAliasSet): void
    {
        $this->levelAliasSet = $levelAliasSet;
    }

    /**
     * @return string
     */
    public function getBizTrafficId(): string
    {
        return $this->bizTrafficId;
    }

    /**
     * @param string $bizTrafficId
     */
    public function setBizTrafficId(string $bizTrafficId): void
    {
        $this->bizTrafficId = $bizTrafficId;
    }

    /**
     * @return stdClass
     */
    public function getExtensionMap(): stdClass
    {
        return $this->extensionMap;
    }

    /**
     * @param stdClass $extensionMap
     */
    public function setExtensionMap(stdClass $extensionMap): void
    {
        $this->extensionMap = $extensionMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}