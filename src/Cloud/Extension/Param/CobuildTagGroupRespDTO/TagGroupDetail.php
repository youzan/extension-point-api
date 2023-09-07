<?php

namespace Com\Youzan\Cloud\Extension\Param\CobuildTagGroupRespDTO;

use Com\Youzan\Cloud\Extension\Param\CobuildTagGroupRespDTO\TagDetailDTO;

/**
 * 标签组详情
 * @author Baymax
 * @create Wed Aug 30 16:50:08 CST 2023
 */
class TagGroupDetail implements \JsonSerializable {

    /**
     * 标签组ID
     * @var string
     */
    private $tagGroupId;

    /**
     * CRM标签组ID
     * @var int
     */
    private $crmTagGroupId;

    /**
     * 标签组名称
     * @var string
     */
    private $tagGroupName;

    /**
     * 标签组顺序 在企业微信侧边栏客户画像按照这个顺序号展示标签 
     * @var int
     */
    private $tagGroupOrder;

    /**
     * 业务类型 -1:全集 0:普通 2:精准营销
     * @var int
     */
    private $bizType;

    /**
     * 标签组来源 0:企微助手 1:CRM 2:微商城 3:企业微信
     * @var int
     */
    private $tagGroupSource;

    /**
     * 标签组下的标签详情
     * @var array
     */
    private $tags;



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
     * @return int
     */
    public function getCrmTagGroupId(): ?int
    {
        return $this->crmTagGroupId;
    }

    /**
     * @param int $crmTagGroupId
     */
    public function setCrmTagGroupId(?int $crmTagGroupId): void
    {
        $this->crmTagGroupId = $crmTagGroupId;
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
    public function getTagGroupOrder(): ?int
    {
        return $this->tagGroupOrder;
    }

    /**
     * @param int $tagGroupOrder
     */
    public function setTagGroupOrder(?int $tagGroupOrder): void
    {
        $this->tagGroupOrder = $tagGroupOrder;
    }

    /**
     * @return int
     */
    public function getBizType(): ?int
    {
        return $this->bizType;
    }

    /**
     * @param int $bizType
     */
    public function setBizType(?int $bizType): void
    {
        $this->bizType = $bizType;
    }

    /**
     * @return int
     */
    public function getTagGroupSource(): ?int
    {
        return $this->tagGroupSource;
    }

    /**
     * @param int $tagGroupSource
     */
    public function setTagGroupSource(?int $tagGroupSource): void
    {
        $this->tagGroupSource = $tagGroupSource;
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