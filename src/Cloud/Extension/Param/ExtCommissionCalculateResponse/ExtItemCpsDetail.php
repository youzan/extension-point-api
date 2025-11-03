<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtCommissionCalculateResponse;



/**
 * 导购佣金计算明细
 * @author Baymax
 * @create Wed Jan 22 16:28:58 CST 2025
 */
class ExtItemCpsDetail implements \JsonSerializable {

    /**
     * 订单明细Id
     * @var int
     */
    private $itemId;

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
     * 商品佣金(单位:分)
     * @var int
     */
    private $cpsMoney;

    /**
     * 商品佣金比例（百分比*10000，如 50% -&gt; 5000     10.8% - &gt; 1080，如果佣金计算类型是按固定金额则传0）20241115之后的接入扩展点的商家固定传0即可，产品中不使用该字段
     * @var int
     */
    private $cpsRate;

    /**
     * 佣金计算类型； 按比例：0，按固定金额：1，20241115之后的接入扩展点的商家固定传0即可，产品中不使用该字段
     * @var int
     */
    private $cpsType;

    /**
     * 指定商品提成 是否使用标品逻辑计算：默认false ,false  : 使用商家扩展点逻辑计算提成，true :使用标品规则计算提成
     * @var bool
     */
    private $useStandRuleCal;



    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(?int $itemId): void
    {
        $this->itemId = $itemId;
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
    public function getCpsMoney(): ?int
    {
        return $this->cpsMoney;
    }

    /**
     * @param int $cpsMoney
     */
    public function setCpsMoney(?int $cpsMoney): void
    {
        $this->cpsMoney = $cpsMoney;
    }

    /**
     * @return int
     */
    public function getCpsRate(): ?int
    {
        return $this->cpsRate;
    }

    /**
     * @param int $cpsRate
     */
    public function setCpsRate(?int $cpsRate): void
    {
        $this->cpsRate = $cpsRate;
    }

    /**
     * @return int
     */
    public function getCpsType(): ?int
    {
        return $this->cpsType;
    }

    /**
     * @param int $cpsType
     */
    public function setCpsType(?int $cpsType): void
    {
        $this->cpsType = $cpsType;
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