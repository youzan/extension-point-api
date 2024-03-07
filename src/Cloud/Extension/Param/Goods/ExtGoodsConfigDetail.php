<?php

namespace Com\Youzan\Cloud\Extension\Param\Goods;



/**
 *  
 * @author Baymax
 * @create Thu Jun 30 19:00:48 CST 2022
 */
class ExtGoodsConfigDetail implements \JsonSerializable {

    /**
     * 商品所在店铺id，回传request中的kdtId即可。
     * @var int
     */
    private $kdtId;

    /**
     * 商品id。回传request中的商品id
     * @var int
     */
    private $goodsId;

    /**
     * 分销员等级，回传请求参数等级值
     * @var int
     */
    private $level;

    /**
     * 一级佣金比例。返回整数. 大于0，小于等于 10000。示例 ：10.5% : 1050, 5% : 500
     * @var int
     */
    private $iRate;

    /**
     * 二级佣金比例（邀请奖励）。返回整数. 大于0，小于等于10000.示例 ：10.5% : 1050, 5% :500
     * @var int
     */
    private $iiRate;

    /**
     * 一级佣金（固定金额，单位：分）。返回大于0的整数。示例 ：100.55元 -&gt; 10055
     * @var int
     */
    private $iCommission;

    /**
     * 二级佣金（固定金额，单位：分）。返回大于0的整数。示例 ：100.55元 -&gt; 10055
     * @var int
     */
    private $iiCommission;



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
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(?int $level): void
    {
        $this->level = $level;
    }

    /**
     * @return int
     */
    public function getIRate(): ?int
    {
        return $this->iRate;
    }

    /**
     * @param int $iRate
     */
    public function setIRate(?int $iRate): void
    {
        $this->iRate = $iRate;
    }

    /**
     * @return int
     */
    public function getIiRate(): ?int
    {
        return $this->iiRate;
    }

    /**
     * @param int $iiRate
     */
    public function setIiRate(?int $iiRate): void
    {
        $this->iiRate = $iiRate;
    }

    /**
     * @return int
     */
    public function getICommission(): ?int
    {
        return $this->iCommission;
    }

    /**
     * @param int $iCommission
     */
    public function setICommission(?int $iCommission): void
    {
        $this->iCommission = $iCommission;
    }

    /**
     * @return int
     */
    public function getIiCommission(): ?int
    {
        return $this->iiCommission;
    }

    /**
     * @param int $iiCommission
     */
    public function setIiCommission(?int $iiCommission): void
    {
        $this->iiCommission = $iiCommission;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}