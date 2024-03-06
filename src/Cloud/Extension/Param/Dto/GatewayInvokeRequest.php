<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use StdClass;

use Com\Youzan\Cloud\Extension\Param\Dto\ChildNodeRequest;
use Com\Youzan\Cloud\Extension\Param\Dto\ListParam;

/**
 *  
 * @author Baymax
 * @create Mon Feb 07 15:40:04 CST 2022
 */
class GatewayInvokeRequest implements \JsonSerializable {

    /**
     *  
     * @var string
     */
    private $parentSting;

    /**
     *  
     * @var bool
     */
    private $parentBoolean;

    /**
     *  
     * @var int
     */
    private $parentLong;

    /**
     *  
     * @var int
     */
    private $parentInt;

    /**
     *  
     * @var stdClass
     */
    private $parentMap;

    /**
     *  
     * @var array
     */
    private $parentList;

    /**
     *   
     * @var ChildNodeRequest
     */
    private $childNodeRequest;

    /**
     *  
     * @var array
     */
    private $parentStringSet;

    /**
     *  
     * @var array
     */
    private $parentObjSet;



    /**
     * @return string
     */
    public function getParentSting(): ?string
    {
        return $this->parentSting;
    }

    /**
     * @param string $parentSting
     */
    public function setParentSting(?string $parentSting): void
    {
        $this->parentSting = $parentSting;
    }

    /**
     * @return bool
     */
    public function getParentBoolean(): ?bool
    {
        return $this->parentBoolean;
    }

    /**
     * @param bool $parentBoolean
     */
    public function setParentBoolean(?bool $parentBoolean): void
    {
        $this->parentBoolean = $parentBoolean;
    }

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
     * @return ChildNodeRequest
     */
    public function getChildNodeRequest(): ?ChildNodeRequest
    {
        return $this->childNodeRequest;
    }

    /**
     * @param ChildNodeRequest $childNodeRequest
     */
    public function setChildNodeRequest(?ChildNodeRequest $childNodeRequest): void
    {
        $this->childNodeRequest = $childNodeRequest;
    }

    /**
     * @return array
     */
    public function getParentStringSet(): ?array
    {
        return $this->parentStringSet;
    }

    /**
     * @param array $parentStringSet
     */
    public function setParentStringSet(?array $parentStringSet): void
    {
        $this->parentStringSet = $parentStringSet;
    }

    /**
     * @return array
     */
    public function getParentObjSet(): ?array
    {
        return $this->parentObjSet;
    }

    /**
     * @param array $parentObjSet
     */
    public function setParentObjSet(?array $parentObjSet): void
    {
        $this->parentObjSet = $parentObjSet;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}