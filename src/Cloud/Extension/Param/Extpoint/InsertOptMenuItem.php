<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;



/**
 * 
 * @author Baymax
 * @create 2020-09-01 17:22:42.0
 */
class InsertOptMenuItem implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $parentPath;

    /**
     * 
     * @var string
     */
    private $name;

    /**
     * 
     * @var string
     */
    private $url;

    /**
     * 
     * @var string
     */
    private $menuAfter;

    /**
     * 
     * @var int
     */
    private $menuSort;

    /**
     * 
     * @var string
     */
    private $categoryAfter;

    /**
     * 
     * @var int
     */
    private $categorySort;

    /**
     * 
     * @var int
     */
    private $menuItemType;

    /**
     * 
     * @var string
     */
    private $category;



    /**
     * @return string
     */
    public function getParentPath(): string
    {
        return $this->parentPath;
    }

    /**
     * @param string $parentPath
     */
    public function setParentPath(string $parentPath): void
    {
        $this->parentPath = $parentPath;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getMenuAfter(): string
    {
        return $this->menuAfter;
    }

    /**
     * @param string $menuAfter
     */
    public function setMenuAfter(string $menuAfter): void
    {
        $this->menuAfter = $menuAfter;
    }

    /**
     * @return int
     */
    public function getMenuSort(): int
    {
        return $this->menuSort;
    }

    /**
     * @param int $menuSort
     */
    public function setMenuSort(int $menuSort): void
    {
        $this->menuSort = $menuSort;
    }

    /**
     * @return string
     */
    public function getCategoryAfter(): string
    {
        return $this->categoryAfter;
    }

    /**
     * @param string $categoryAfter
     */
    public function setCategoryAfter(string $categoryAfter): void
    {
        $this->categoryAfter = $categoryAfter;
    }

    /**
     * @return int
     */
    public function getCategorySort(): int
    {
        return $this->categorySort;
    }

    /**
     * @param int $categorySort
     */
    public function setCategorySort(int $categorySort): void
    {
        $this->categorySort = $categorySort;
    }

    /**
     * @return int
     */
    public function getMenuItemType(): int
    {
        return $this->menuItemType;
    }

    /**
     * @param int $menuItemType
     */
    public function setMenuItemType(int $menuItemType): void
    {
        $this->menuItemType = $menuItemType;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}