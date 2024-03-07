<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;



/**
 *  
 * @author Baymax
 * @create Tue Jan 10 20:10:12 CST 2023
 */
class InsertOptMenuItem implements \JsonSerializable {

    /**
     * 父级路径，以 ”/&quot; 字符表示路径，只支持一级菜单下的二级菜单定制
     * @var string
     */
    private $parentPath;

    /**
     * 菜单名称
     * @var string
     */
    private $name;

    /**
     * 菜单调整路径，只支持相对路径
     * @var string
     */
    private $url;

    /**
     * 若category不存在，忽略该参数设置；  若category存在，放置对应category下的menuAfter后面，如menuAfter不存在或未设置，默认放置最后
     * @var string
     */
    private $menuAfter;

    /**
     * 若多个menu放置在同一个menuAfter后面，默认根据menuSort从小到大排序
     * @var int
     */
    private $menuSort;

    /**
     * 如果category已存在，忽略该参数设置；  若category是新增的，放置对应的categoryAfter后面，  如果categoryAfter不存在，默认放置最后
     * @var string
     */
    private $categoryAfter;

    /**
     * 如果category已存在，忽略该参数设置；  如果新增的多个二级菜单分组category放置在同一个categoryAfter后面，  根据categorySort字段排序放置，默认从小到大排序
     * @var int
     */
    private $categorySort;

    /**
     * 资源类型，默认 1： 菜单，预留扩展字段
     * @var int
     */
    private $menuItemType;

    /**
     * 二级菜单分组名称，如未设置，默认放置二级菜单最后，以 ”/&quot; 字符表示路径,若分组不存在，新增该分组
     * @var string
     */
    private $category;



    /**
     * @return string
     */
    public function getParentPath(): ?string
    {
        return $this->parentPath;
    }

    /**
     * @param string $parentPath
     */
    public function setParentPath(?string $parentPath): void
    {
        $this->parentPath = $parentPath;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getMenuAfter(): ?string
    {
        return $this->menuAfter;
    }

    /**
     * @param string $menuAfter
     */
    public function setMenuAfter(?string $menuAfter): void
    {
        $this->menuAfter = $menuAfter;
    }

    /**
     * @return int
     */
    public function getMenuSort(): ?int
    {
        return $this->menuSort;
    }

    /**
     * @param int $menuSort
     */
    public function setMenuSort(?int $menuSort): void
    {
        $this->menuSort = $menuSort;
    }

    /**
     * @return string
     */
    public function getCategoryAfter(): ?string
    {
        return $this->categoryAfter;
    }

    /**
     * @param string $categoryAfter
     */
    public function setCategoryAfter(?string $categoryAfter): void
    {
        $this->categoryAfter = $categoryAfter;
    }

    /**
     * @return int
     */
    public function getCategorySort(): ?int
    {
        return $this->categorySort;
    }

    /**
     * @param int $categorySort
     */
    public function setCategorySort(?int $categorySort): void
    {
        $this->categorySort = $categorySort;
    }

    /**
     * @return int
     */
    public function getMenuItemType(): ?int
    {
        return $this->menuItemType;
    }

    /**
     * @param int $menuItemType
     */
    public function setMenuItemType(?int $menuItemType): void
    {
        $this->menuItemType = $menuItemType;
    }

    /**
     * @return string
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(?string $category): void
    {
        $this->category = $category;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}