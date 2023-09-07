<?php

namespace Com\Youzan\Cloud\Extension\Param\CobuildTagGroupRespDTO;



/**
 * 标签组下的标签详情
 * @author Baymax
 * @create Wed Aug 30 16:50:08 CST 2023
 */
class TagDetailDTO implements \JsonSerializable {

    /**
     * 标签组ID 需保持与外层的（tagGroupDetail）的标签组ID相同
     * @var string
     */
    private $tagGroupId;

    /**
     * 标签组名称 需保持与外层的（tagGroupDetail）的标签组名称相同
     * @var string
     */
    private $tagGroupName;

    /**
     * CRM侧对应的标签组ID 需保持与外层的（tagGroupDetail）的CRM标签组ID相同
     * @var int
     */
    private $crmTagGroupId;

    /**
     * 标签组排序 标签组名称 需保持与外层的（tagGroupDetail）的标签组顺序相同
     * @var int
     */
    private $tagGroupOrder;

    /**
     * 标签ID
     * @var string
     */
    private $tagId;

    /**
     * CRM侧对应的标签ID
     * @var int
     */
    private $crmTagId;

    /**
     * 标签名称
     * @var string
     */
    private $tagName;

    /**
     * 标签排序
     * @var int
     */
    private $tagOrder;

    /**
     * 业务类型 -1:全集 0:普通 2:精准营销
     * @var int
     */
    private $bizType;



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
     * @return int
     */
    public function getTagOrder(): ?int
    {
        return $this->tagOrder;
    }

    /**
     * @param int $tagOrder
     */
    public function setTagOrder(?int $tagOrder): void
    {
        $this->tagOrder = $tagOrder;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}