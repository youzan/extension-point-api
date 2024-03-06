<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\ListParam;

/**
 *   
 * @author Baymax
 * @create Mon Feb 07 15:40:04 CST 2022
 */
class ChildNodeRequest implements \JsonSerializable {

    /**
     *  
     * @var string
     */
    private $childString;

    /**
     *  
     * @var bool
     */
    private $childBoolean;

    /**
     *  
     * @var int
     */
    private $childLong;

    /**
     *  
     * @var array
     */
    private $childList;



    /**
     * @return string
     */
    public function getChildString(): ?string
    {
        return $this->childString;
    }

    /**
     * @param string $childString
     */
    public function setChildString(?string $childString): void
    {
        $this->childString = $childString;
    }

    /**
     * @return bool
     */
    public function getChildBoolean(): ?bool
    {
        return $this->childBoolean;
    }

    /**
     * @param bool $childBoolean
     */
    public function setChildBoolean(?bool $childBoolean): void
    {
        $this->childBoolean = $childBoolean;
    }

    /**
     * @return int
     */
    public function getChildLong(): ?int
    {
        return $this->childLong;
    }

    /**
     * @param int $childLong
     */
    public function setChildLong(?int $childLong): void
    {
        $this->childLong = $childLong;
    }

    /**
     * @return array
     */
    public function getChildList(): ?array
    {
        return $this->childList;
    }

    /**
     * @param array $childList
     */
    public function setChildList(?array $childList): void
    {
        $this->childList = $childList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}