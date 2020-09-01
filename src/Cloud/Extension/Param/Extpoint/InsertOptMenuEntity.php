<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Extpoint\InsertOptMenuItem;

/**
 * 
 * @author Baymax
 * @create 2020-09-01 17:22:42.0
 */
class InsertOptMenuEntity implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $optType;

    /**
     * 
     * @var array
     */
    private $menuItems;



    /**
     * @return string
     */
    public function getOptType(): string
    {
        return $this->optType;
    }

    /**
     * @param string $optType
     */
    public function setOptType(string $optType): void
    {
        $this->optType = $optType;
    }

    /**
     * @return array
     */
    public function getMenuItems(): array
    {
        return $this->menuItems;
    }

    /**
     * @param array $menuItems
     */
    public function setMenuItems(array $menuItems): void
    {
        $this->menuItems = $menuItems;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}