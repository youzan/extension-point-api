<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtAchievementCalculateResponse;



/**
 * 销售业绩明细
 * @author Baymax
 * @create Mon Mar 31 11:21:07 CST 2025
 */
class ExtAchievementItemDetail implements \JsonSerializable {

    /**
     * 订单明细id
     * @var int
     */
    private $oid;

    /**
     * 外部订单明细Id，无原单退款单时必须返回，其他场景为null即可
     * @var string
     */
    private $outerOid;

    /**
     * 商品Id，在有赞平台产生的订单，该字段为店铺商品id，外部同步的订单则该字段可能为店铺商品id也可能为总部商品id，取决于同步时传入的商品id值
     * @var int
     */
    private $goodsId;

    /**
     * 商品规格Id，在有赞平台产生的订单，该字段为店铺商品规格id，外部同步的订单则该字段可能为店铺商品规格id也可能为总部商品规格id，取决于同步时传入的商品规格id值
     * @var int
     */
    private $skuId;

    /**
     * 业绩金额，如果不归属，则为0，单位：分
     * @var int
     */
    private $achievement;

    /**
     * 是否有业绩
     * @var bool
     */
    private $hasAchievement;

    /**
     * 是否用标品规则计算业绩   false or null :商家指定商品业绩，使用商家扩展点逻辑规则计算业绩  true: 通过标品计算商品业绩
     * @var bool
     */
    private $useStandRuleCal;



    /**
     * @return int
     */
    public function getOid(): ?int
    {
        return $this->oid;
    }

    /**
     * @param int $oid
     */
    public function setOid(?int $oid): void
    {
        $this->oid = $oid;
    }

    /**
     * @return string
     */
    public function getOuterOid(): ?string
    {
        return $this->outerOid;
    }

    /**
     * @param string $outerOid
     */
    public function setOuterOid(?string $outerOid): void
    {
        $this->outerOid = $outerOid;
    }

    /**
     * @return int
     */
    public function getGoodsId(): ?int
    {
        return $this->goodsId;
    }

    /**
     * @param int $goodsId
     */
    public function setGoodsId(?int $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @return int
     */
    public function getSkuId(): ?int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(?int $skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * @return int
     */
    public function getAchievement(): ?int
    {
        return $this->achievement;
    }

    /**
     * @param int $achievement
     */
    public function setAchievement(?int $achievement): void
    {
        $this->achievement = $achievement;
    }

    /**
     * @return bool
     */
    public function getHasAchievement(): ?bool
    {
        return $this->hasAchievement;
    }

    /**
     * @param bool $hasAchievement
     */
    public function setHasAchievement(?bool $hasAchievement): void
    {
        $this->hasAchievement = $hasAchievement;
    }

    /**
     * @return bool
     */
    public function getUseStandRuleCal(): ?bool
    {
        return $this->useStandRuleCal;
    }

    /**
     * @param bool $useStandRuleCal
     */
    public function setUseStandRuleCal(?bool $useStandRuleCal): void
    {
        $this->useStandRuleCal = $useStandRuleCal;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}