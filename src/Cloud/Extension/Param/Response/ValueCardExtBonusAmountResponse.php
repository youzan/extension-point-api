<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 *  
 * @author Baymax
 * @create Wed Mar 09 18:31:26 CST 2022
 */
class ValueCardExtBonusAmountResponse implements \JsonSerializable {

    /**
     * 充值订单号
     * @var string
     */
    private $outTradeNo;

    /**
     * 充值赠送订单号 
     * @var string
     */
    private $outTradeDetailNo;

    /**
     * 1:发放成功  2:发放失败  99:发放中
     * @var int
     */
    private $rechargeStatus;

    /**
     * 卡名称
     * @var string
     */
    private $cardName;

    /**
     * 卡号
     * @var string
     */
    private $cardNo;

    /**
     * 卡背景图片
     * @var string
     */
    private $backgroundImage;

    /**
     * 卡状态
     * @var string
     */
    private $cardStatus;

    /**
     * 卡类型
     * @var string
     */
    private $cardType;

    /**
     * 卡余额，单位分
     * @var int
     */
    private $balance;

    /**
     * 卡余额本金，单位分
     * @var int
     */
    private $principalDnom;

    /**
     * 卡余额赠送金，单位分
     * @var int
     */
    private $sumBonusDnom;

    /**
     * 卡是否可以充值，默认true
     * @var bool
     */
    private $needRecharge;

    /**
     * 三方系统错误码
     * @var int
     */
    private $errorCode;

    /**
     * 三方系统错误系统
     * @var string
     */
    private $errorMsg;



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
     * @return int
     */
    public function getRechargeStatus(): ?int
    {
        return $this->rechargeStatus;
    }

    /**
     * @param int $rechargeStatus
     */
    public function setRechargeStatus(?int $rechargeStatus): void
    {
        $this->rechargeStatus = $rechargeStatus;
    }

    /**
     * @return string
     */
    public function getCardName(): ?string
    {
        return $this->cardName;
    }

    /**
     * @param string $cardName
     */
    public function setCardName(?string $cardName): void
    {
        $this->cardName = $cardName;
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
    public function getBackgroundImage(): ?string
    {
        return $this->backgroundImage;
    }

    /**
     * @param string $backgroundImage
     */
    public function setBackgroundImage(?string $backgroundImage): void
    {
        $this->backgroundImage = $backgroundImage;
    }

    /**
     * @return string
     */
    public function getCardStatus(): ?string
    {
        return $this->cardStatus;
    }

    /**
     * @param string $cardStatus
     */
    public function setCardStatus(?string $cardStatus): void
    {
        $this->cardStatus = $cardStatus;
    }

    /**
     * @return string
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    /**
     * @param string $cardType
     */
    public function setCardType(?string $cardType): void
    {
        $this->cardType = $cardType;
    }

    /**
     * @return int
     */
    public function getBalance(): ?int
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     */
    public function setBalance(?int $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * @return int
     */
    public function getPrincipalDnom(): ?int
    {
        return $this->principalDnom;
    }

    /**
     * @param int $principalDnom
     */
    public function setPrincipalDnom(?int $principalDnom): void
    {
        $this->principalDnom = $principalDnom;
    }

    /**
     * @return int
     */
    public function getSumBonusDnom(): ?int
    {
        return $this->sumBonusDnom;
    }

    /**
     * @param int $sumBonusDnom
     */
    public function setSumBonusDnom(?int $sumBonusDnom): void
    {
        $this->sumBonusDnom = $sumBonusDnom;
    }

    /**
     * @return bool
     */
    public function getNeedRecharge(): ?bool
    {
        return $this->needRecharge;
    }

    /**
     * @param bool $needRecharge
     */
    public function setNeedRecharge(?bool $needRecharge): void
    {
        $this->needRecharge = $needRecharge;
    }

    /**
     * @return int
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    /**
     * @param int $errorCode
     */
    public function setErrorCode(?int $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMsg(): ?string
    {
        return $this->errorMsg;
    }

    /**
     * @param string $errorMsg
     */
    public function setErrorMsg(?string $errorMsg): void
    {
        $this->errorMsg = $errorMsg;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}