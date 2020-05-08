<?php

namespace Com\Youzan\Cloud\Extension\Param\Goods;



/**
 * 商品佣金设置，包含每个等级
 * @author Baymax
 * @create 2020-05-08 14:35:44.0
 */
class ExtGoodsLevelRate implements \JsonSerializable {

    /**
     * 等级值。大于0，与店铺后台设置的等级需要一一对应
     * @var int
     */
    private $level;

    /**
     * 商品对应等级的佣金比例。整数值，大于0.1050 -&amp;gt; 10.5%；500 -&amp;gt; 5%
     * @var int
     */
    private $iRate;

    /**
     * 商品对应等级的邀请奖励比例。整数值，大于0.1050 -&amp;gt; 10.5%；500 -&amp;gt; 5%
     * @var int
     */
    private $iiRate;



    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    /**
     * @return int
     */
    public function getIRate(): int
    {
        return $this->iRate;
    }

    /**
     * @param int $iRate
     */
    public function setIRate(int $iRate): void
    {
        $this->iRate = $iRate;
    }

    /**
     * @return int
     */
    public function getIiRate(): int
    {
        return $this->iiRate;
    }

    /**
     * @param int $iiRate
     */
    public function setIiRate(int $iiRate): void
    {
        $this->iiRate = $iiRate;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}