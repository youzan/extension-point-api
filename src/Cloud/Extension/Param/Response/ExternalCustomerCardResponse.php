<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2021-10-18 19:24:18.0
 */
class ExternalCustomerCardResponse implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 客户id
     * @var int
     */
    private $userId;

    /**
     * 外部会员卡id
     * @var string
     */
    private $externalId;

    /**
     * 外部会员卡号
     * @var string
     */
    private $externalNo;

    /**
     * 外部卡模板id
     * @var string
     */
    private $externalCardId;

    /**
     * 有赞会员卡号
     * @var string
     */
    private $cardNo;

    /**
     * 扩展字段
     * @var string
     */
    private $extraValue;

    /**
     * 创建时间
     * @var int
     */
    private $createdAt;

    /**
     * 发卡时间
     * @var int
     */
    private $updatedAt;

    /**
     * 删除时间
     * @var int
     */
    private $deletedAt;



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
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * @param string $externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * @return string
     */
    public function getExternalNo(): ?string
    {
        return $this->externalNo;
    }

    /**
     * @param string $externalNo
     */
    public function setExternalNo(?string $externalNo): void
    {
        $this->externalNo = $externalNo;
    }

    /**
     * @return string
     */
    public function getExternalCardId(): ?string
    {
        return $this->externalCardId;
    }

    /**
     * @param string $externalCardId
     */
    public function setExternalCardId(?string $externalCardId): void
    {
        $this->externalCardId = $externalCardId;
    }

    /**
     * @return string
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }

    /**
     * @param string $cardNo
     */
    public function setCardNo(?string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return string
     */
    public function getExtraValue(): ?string
    {
        return $this->extraValue;
    }

    /**
     * @param string $extraValue
     */
    public function setExtraValue(?string $extraValue): void
    {
        $this->extraValue = $extraValue;
    }

    /**
     * @return int
     */
    public function getCreatedAt(): ?int
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedAt(?int $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getUpdatedAt(): ?int
    {
        return $this->updatedAt;
    }

    /**
     * @param int $updatedAt
     */
    public function setUpdatedAt(?int $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return int
     */
    public function getDeletedAt(): ?int
    {
        return $this->deletedAt;
    }

    /**
     * @param int $deletedAt
     */
    public function setDeletedAt(?int $deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}