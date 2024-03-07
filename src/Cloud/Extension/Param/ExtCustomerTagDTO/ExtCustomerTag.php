<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtCustomerTagDTO;



/**
 * 包含的标签列表，无标签时为空
 * @author Baymax
 * @create Thu Aug 24 18:49:08 CST 2023
 */
class ExtCustomerTag implements \JsonSerializable {

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}