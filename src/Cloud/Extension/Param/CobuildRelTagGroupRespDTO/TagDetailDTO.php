<?php

namespace Com\Youzan\Cloud\Extension\Param\CobuildRelTagGroupRespDTO;



/**
 * 标签列表
 * @author Baymax
 * @create Sun Oct 08 11:06:28 CST 2023
 */
class TagDetailDTO implements \JsonSerializable {

    /**
     * 标签ID
     * @var string
     */
    private $tagId;

    /**
     * 有赞CRM系统标签ID
     * @var int
     */
    private $crmTagId;

    /**
     * 标签名称，有赞CRM系统和企业微信助手标签名称相同
     * @var string
     */
    private $tagName;

    /**
     * 标签组ID
     * @var string
     */
    private $tagGroupId;

    /**
     * 标签组名称
     * @var string
     */
    private $tagGroupName;

    /**
     * 标签来源 0 - 企微助手、 1 - CRM、 2 - 微商城
     * @var int
     */
    private $tagSource;



    /**
     * @return string
     */
    public function getTagId(): ?string
    {
        return $this->tagId;
    }

    /**
     * @param string $tagId
     */
    public function setTagId(?string $tagId): void
    {
        $this->tagId = $tagId;
    }

    /**
     * @return int
     */
    public function getCrmTagId(): ?int
    {
        return $this->crmTagId;
    }

    /**
     * @param int $crmTagId
     */
    public function setCrmTagId(?int $crmTagId): void
    {
        $this->crmTagId = $crmTagId;
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
     * @return string
     */
    public function getTagGroupId(): ?string
    {
        return $this->tagGroupId;
    }

    /**
     * @param string $tagGroupId
     */
    public function setTagGroupId(?string $tagGroupId): void
    {
        $this->tagGroupId = $tagGroupId;
    }

    /**
     * @return string
     */
    public function getTagGroupName(): ?string
    {
        return $this->tagGroupName;
    }

    /**
     * @param string $tagGroupName
     */
    public function setTagGroupName(?string $tagGroupName): void
    {
        $this->tagGroupName = $tagGroupName;
    }

    /**
     * @return int
     */
    public function getTagSource(): ?int
    {
        return $this->tagSource;
    }

    /**
     * @param int $tagSource
     */
    public function setTagSource(?int $tagSource): void
    {
        $this->tagSource = $tagSource;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}