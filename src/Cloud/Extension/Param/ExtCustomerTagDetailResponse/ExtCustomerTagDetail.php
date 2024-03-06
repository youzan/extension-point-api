<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtCustomerTagDetailResponse;



/**
 * 客户标签列表
 * @author Baymax
 * @create Thu Aug 24 18:49:01 CST 2023
 */
class ExtCustomerTagDetail implements \JsonSerializable {

    /**
     * 标签ID
     * @var int
     */
    private $tagId;

    /**
     * 标签名称
     * @var string
     */
    private $tagName;

    /**
     * 标签组ID，标签无分组时为空
     * @var int
     */
    private $categoryId;

    /**
     * 标签组名称，标签无分组时为空
     * @var string
     */
    private $categoryName;



    /**
     * @return int
     */
    public function getTagId(): ?int
    {
        return $this->tagId;
    }

    /**
     * @param int $tagId
     */
    public function setTagId(?int $tagId): void
    {
        $this->tagId = $tagId;
    }

    /**
     * @return string
     */
    public function getTagName(): ?string
    {
        return $this->tagName;
    }

    /**
     * @param string $tagName
     */
    public function setTagName(?string $tagName): void
    {
        $this->tagName = $tagName;
    }

    /**
     * @return int
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     */
    public function setCategoryId(?int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return string
     */
    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }

    /**
     * @param string $categoryName
     */
    public function setCategoryName(?string $categoryName): void
    {
        $this->categoryName = $categoryName;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}