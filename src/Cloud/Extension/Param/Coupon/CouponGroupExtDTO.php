<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use DateTime;

/**
 * 
 * @author Baymax
 * @create Fri Sep 28 18:50:33 CST 2018
 */
class CouponGroupExtDTO implements \JsonSerializable {

    /**
     * 卡券ID
     * @var int
     */
    private $id;

    /**
     * 卡券组别名
     * @var string
     */
    private $alias;

    /**
     * 卡券标题
     * @var string
     */
    private $title;

    /**
     * 卡券说明
     * @var string
     */
    private $description;

    /**
     * 优惠金额门槛
     * @var int
     */
    private $priceCondition;

    /**
     * 优惠金额门槛文字描述
     * @var string
     */
    private $conditionDesc;

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
     * 开始有效日期 时间戳
     * @var DateTime
     */
    private $beginAt;

    /**
     * 到期时间 时间戳
     * @var DateTime
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
     * 领取数
     * @var int
     */
    private $totalTake;

    /**
     * 使用数
     * @var int
     */
    private $totalUsed;

    /**
     * 券组类型 0：优惠券 1：优惠码
     * @var int
     */
    private $groupType;

    /**
     * 状态 0: 创建成功 1: 已停止
     * @var int
     */
    private $status;

    /**
     * 创建时间
     * @var DateTime
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
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     */
    public function setAlias(string $alias): void
    {
        $this->alias = $alias;
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
     * @return string
     */
    public function getConditionDesc(): string
    {
        return $this->conditionDesc;
    }

    /**
     * @param string $conditionDesc
     */
    public function setConditionDesc(string $conditionDesc): void
    {
        $this->conditionDesc = $conditionDesc;
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
     * @return DateTime
     */
    public function getBeginAt(): DateTime
    {
        return $this->beginAt;
    }

    /**
     * @param DateTime $beginAt
     */
    public function setBeginAt(DateTime $beginAt): void
    {
        $this->beginAt = $beginAt;
    }

    /**
     * @return DateTime
     */
    public function getEndAt(): DateTime
    {
        return $this->endAt;
    }

    /**
     * @param DateTime $endAt
     */
    public function setEndAt(DateTime $endAt): void
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
    public function getTotalTake(): int
    {
        return $this->totalTake;
    }

    /**
     * @param int $totalTake
     */
    public function setTotalTake(int $totalTake): void
    {
        $this->totalTake = $totalTake;
    }

    /**
     * @return int
     */
    public function getTotalUsed(): int
    {
        return $this->totalUsed;
    }

    /**
     * @param int $totalUsed
     */
    public function setTotalUsed(int $totalUsed): void
    {
        $this->totalUsed = $totalUsed;
    }

    /**
     * @return int
     */
    public function getGroupType(): int
    {
        return $this->groupType;
    }

    /**
     * @param int $groupType
     */
    public function setGroupType(int $groupType): void
    {
        $this->groupType = $groupType;
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
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}