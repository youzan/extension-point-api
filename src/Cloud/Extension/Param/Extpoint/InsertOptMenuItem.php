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
    private $after;

    /**
     * 
     * @var int
     */
    private $sort;



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
    public function getAfter(): string
    {
        return $this->after;
    }

    /**
     * @param string $after
     */
    public function setAfter(string $after): void
    {
        $this->after = $after;
    }

    /**
     * @return int
     */
    public function getSort(): int
    {
        return $this->sort;
    }

    /**
     * @param int $sort
     */
    public function setSort(int $sort): void
    {
        $this->sort = $sort;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}