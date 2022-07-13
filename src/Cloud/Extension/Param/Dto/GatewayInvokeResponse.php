<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\ListParam;
use StdClass;
use Com\Youzan\Cloud\Extension\Param\Dto\ChildNodeResponse;

/**
 * a
 * @author Baymax
 * @create Tue Dec 28 20:39:24 CST 2021
 */
class GatewayInvokeResponse implements \JsonSerializable {

    /**
     * a
     * @var int
     */
    private $parentLong;

    /**
     * a
     * @var string
     */
    private $parentString;

    /**
     * a
     * @var int
     */
    private $parentInt;

    /**
     * a
     * @var array
     */
    private $parentList;

    /**
     * a
     * @var stdClass
     */
    private $parentMap;

    /**
     * a
     * @var ChildNodeResponse
     */
    private $childNodeResponse;



    /**
     * @return int
     */
    public function getParentLong(): ?int
    {
        return $this->parentLong;
    }

    /**
     * @param int $parentLong
     */
    public function setParentLong(?int $parentLong): void
    {
        $this->parentLong = $parentLong;
    }

    /**
     * @return string
     */
    public function getParentString(): ?string
    {
        return $this->parentString;
    }

    /**
     * @param string $parentString
     */
    public function setParentString(?string $parentString): void
    {
        $this->parentString = $parentString;
    }

    /**
     * @return int
     */
    public function getParentInt(): ?int
    {
        return $this->parentInt;
    }

    /**
     * @param int $parentInt
     */
    public function setParentInt(?int $parentInt): void
    {
        $this->parentInt = $parentInt;
    }

    /**
     * @return array
     */
    public function getParentList(): ?array
    {
        return $this->parentList;
    }

    /**
     * @param array $parentList
     */
    public function setParentList(?array $parentList): void
    {
        $this->parentList = $parentList;
    }

    /**
     * @return stdClass
     */
    public function getParentMap(): ?stdClass
    {
        return $this->parentMap;
    }

    /**
     * @param stdClass $parentMap
     */
    public function setParentMap(?stdClass $parentMap): void
    {
        $this->parentMap = $parentMap;
    }

    /**
     * @return ChildNodeResponse
     */
    public function getChildNodeResponse(): ?ChildNodeResponse
    {
        return $this->childNodeResponse;
    }

    /**
     * @param ChildNodeResponse $childNodeResponse
     */
    public function setChildNodeResponse(?ChildNodeResponse $childNodeResponse): void
    {
        $this->childNodeResponse = $childNodeResponse;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}