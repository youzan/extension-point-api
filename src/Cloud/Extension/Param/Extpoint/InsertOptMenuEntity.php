<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Extpoint\InsertOptMenuItem;

/**
 *  
 * @author Baymax
 * @create Tue Jan 10 20:10:12 CST 2023
 */
class InsertOptMenuEntity implements \JsonSerializable {

    /**
     * 操作类型	，暂时只自持新增
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
    public function getOptType(): ?string
    {
        return $this->optType;
    }

    /**
     * @param string $optType
     */
    public function setOptType(?string $optType): void
    {
        $this->optType = $optType;
    }

    /**
     * @return array
     */
    public function getMenuItems(): ?array
    {
        return $this->menuItems;
    }

    /**
     * @param array $menuItems
     */
    public function setMenuItems(?array $menuItems): void
    {
        $this->menuItems = $menuItems;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}