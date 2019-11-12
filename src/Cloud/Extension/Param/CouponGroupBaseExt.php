<?php

namespace Com\Youzan\Cloud\Extension\Param;

use DateTime;

/**
 * 优惠券组信息
 * @author Baymax
 * @create 2018-09-26 19:40:59.0
 */
class CouponGroupBaseExt implements \JsonSerializable {

    /**
     * 券组id
     * @var int
     */
    private $id;

    /**
     * 优惠券标题
     * @var string
     */
    private $title;

    /**
     * 优惠券说明
     * @var string
     */
    private $description;

    /**
     * 优惠金额门槛
     * @var int
     */
    private $priceCondition;

    /**
     * 优惠类型：1.金额 2.折扣
     * @var int
     */
    private $preferentialType;

    /**
     * 优惠金额或折扣值
     * @var int
     */
    private $preferentialValue;

    /**
     * 有效开始时间
     * @var int
     */
    private $beginAt;

    /**
     * 有效结束时间
     * @var int
     */
    private $endAt;

    /**
     * 参与的商品类型限制: 1: 不限制 2: 限制
     * @var int
     */
    private $participateGoodsType;

    /**
     * 券组大小
     * @var int
     */
    private $size;

    /**
     * 券组库存
     * @var int
     */
    private $stockSize;

    /**
     * 状态 0: 创建成功 1: 已停止
     * @var int
     */
    private $status;

    /**
     * 创建时间
     * @var int
     */
    private $createdAt;



    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getPriceCondition(): int
    {
        return $this->priceCondition;
    }

    /**
     * @param int $priceCondition
     */
    public function setPriceCondition(int $priceCondition): void
    {
        $this->priceCondition = $priceCondition;
    }

    /**
     * @return int
     */
    public function getPreferentialType(): int
    {
        return $this->preferentialType;
    }

    /**
     * @param int $preferentialType
     */
    public function setPreferentialType(int $preferentialType): void
    {
        $this->preferentialType = $preferentialType;
    }

    /**
     * @return int
     */
    public function getPreferentialValue(): int
    {
        return $this->preferentialValue;
    }

    /**
     * @param int $preferentialValue
     */
    public function setPreferentialValue(int $preferentialValue): void
    {
        $this->preferentialValue = $preferentialValue;
    }

    /**
     * @return int
     */
    public function getBeginAt(): int
    {
        return $this->beginAt;
    }

    /**
     * @param int $beginAt
     */
    public function setBeginAt(int $beginAt): void
    {
        $this->beginAt = $beginAt;
    }

    /**
     * @return int
     */
    public function getEndAt(): int
    {
        return $this->endAt;
    }

    /**
     * @param int $endAt
     */
    public function setEndAt(int $endAt): void
    {
        $this->endAt = $endAt;
    }

    /**
     * @return int
     */
    public function getParticipateGoodsType(): int
    {
        return $this->participateGoodsType;
    }

    /**
     * @param int $participateGoodsType
     */
    public function setParticipateGoodsType(int $participateGoodsType): void
    {
        $this->participateGoodsType = $participateGoodsType;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getStockSize(): int
    {
        return $this->stockSize;
    }

    /**
     * @param int $stockSize
     */
    public function setStockSize(int $stockSize): void
    {
        $this->stockSize = $stockSize;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedAt(int $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}