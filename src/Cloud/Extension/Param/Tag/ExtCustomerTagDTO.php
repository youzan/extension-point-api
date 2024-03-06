<?php

namespace Com\Youzan\Cloud\Extension\Param\Tag;

use Com\Youzan\Cloud\Extension\Param\ExtCustomerTagDTO\ExtCustomerTag;

/**
 * 标签组列表
 * @author Baymax
 * @create Thu Aug 24 18:49:09 CST 2023
 */
class ExtCustomerTagDTO implements \JsonSerializable {

    /**
     * 标签组ID
     * @var int
     */
    private $tagCategoryId;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺。
     * @var int
     */
    private $kdtId;

    /**
     * 标签组名称
     * @var string
     */
    private $tagCategoryName;

    /**
     * 标签添加规则：0:仅唯一可添加 1:可重复添加
     * @var int
     */
    private $tagAddRule;

    /**
     * 包含的标签列表，无标签时为空
     * @var array
     */
    private $tags;



    /**
     * @return int
     */
    public function getTagCategoryId(): ?int
    {
        return $this->tagCategoryId;
    }

    /**
     * @param int $tagCategoryId
     */
    public function setTagCategoryId(?int $tagCategoryId): void
    {
        $this->tagCategoryId = $tagCategoryId;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getTagCategoryName(): ?string
    {
        return $this->tagCategoryName;
    }

    /**
     * @param string $tagCategoryName
     */
    public function setTagCategoryName(?string $tagCategoryName): void
    {
        $this->tagCategoryName = $tagCategoryName;
    }

    /**
     * @return int
     */
    public function getTagAddRule(): ?int
    {
        return $this->tagAddRule;
    }

    /**
     * @param int $tagAddRule
     */
    public function setTagAddRule(?int $tagAddRule): void
    {
        $this->tagAddRule = $tagAddRule;
    }

    /**
     * @return array
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}