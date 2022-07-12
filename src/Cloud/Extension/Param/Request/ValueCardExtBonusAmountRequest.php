<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 *  
 * @author Baymax
 * @create Wed Mar 09 18:31:26 CST 2022
 */
class ValueCardExtBonusAmountRequest implements \JsonSerializable {

    /**
     * 充值订单号
     * @var string
     */
    private $outTradeNo;

    /**
     * 外部充值赠送金订单号，幂等标识
     * @var string
     */
    private $outTradeDetailNo;

    /**
     * 卡号
     * @var string
     */
    private $cardNo;

    /**
     * 强增本金金额必须大于0且小于等于500万，单位分
     * @var int
     */
    private $addAmount;

    /**
     * 赠送金强增金额必须大于等于0小于等于500万，单位分
     * @var int
     */
    private $bonusAddAmount;

    /**
     * 充值赠送:RECHARGE_BONUS
     * @var string
     */
    private $addBizType;

    /**
     * 受理机构kdtId
     * @var int
     */
    private $kdtId;

    /**
     * 总部店铺kdtid
     * @var int
     */
    private $rootKdtId;

    /**
     * 有赞开放ID
     * @var string
     */
    private $yzOpenId;



    /**
     * @return string
     */
    public function getOutTradeNo(): ?string
    {
        return $this->outTradeNo;
    }

    /**
     * @param string $outTradeNo
     */
    public function setOutTradeNo(?string $outTradeNo): void
    {
        $this->outTradeNo = $outTradeNo;
    }

    /**
     * @return string
     */
    public function getOutTradeDetailNo(): ?string
    {
        return $this->outTradeDetailNo;
    }

    /**
     * @param string $outTradeDetailNo
     */
    public function setOutTradeDetailNo(?string $outTradeDetailNo): void
    {
        $this->outTradeDetailNo = $outTradeDetailNo;
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
     * @return int
     */
    public function getAddAmount(): ?int
    {
        return $this->addAmount;
    }

    /**
     * @param int $addAmount
     */
    public function setAddAmount(?int $addAmount): void
    {
        $this->addAmount = $addAmount;
    }

    /**
     * @return int
     */
    public function getBonusAddAmount(): ?int
    {
        return $this->bonusAddAmount;
    }

    /**
     * @param int $bonusAddAmount
     */
    public function setBonusAddAmount(?int $bonusAddAmount): void
    {
        $this->bonusAddAmount = $bonusAddAmount;
    }

    /**
     * @return string
     */
    public function getAddBizType(): ?string
    {
        return $this->addBizType;
    }

    /**
     * @param string $addBizType
     */
    public function setAddBizType(?string $addBizType): void
    {
        $this->addBizType = $addBizType;
    }

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
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    /**
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}