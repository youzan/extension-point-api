<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 请求参数
 * @author Baymax
 * @create 2019-11-22 11:54:57.0
 */
class ValueCardExtRechargeRequest implements \JsonSerializable {

    /**
     * 业务充值单号，以此做幂等和【youzan.cardvoucher.card.bill.query.3.0.1】接口中的water_no流水字段相同
     * @var string
     */
    private $rechargeNo;

    /**
     * 收单号（退款用）
     * @var string
     */
    private $acquireNo;

    /**
     * 卡号 注：单卡场景下，可能为空，此时业务方需要自调用开卡接口
     * @var string
     */
    private $cardNo;

    /**
     * 实际支付金额，单位（分）
     * @var int
     */
    private $factDnom;

    /**
     * 本次充值本金的金额 ，单位（分，本金通常与实际支付金额相等）
     * @var int
     */
    private $principalDnom;

    /**
     * 本次充值赠送的金额，单位（分）
     * @var int
     */
    private $sumBonusDnom;

    /**
     * 有赞用户ID
     * @var int
     */
    private $buyerId;

    /**
     * 用户手机号
     * @var string
     */
    private $userPhone;

    /**
     * WXPAY(&quot;微信安全支付&quot;, 1, &quot;wxpay&quot;, Channel.PAY_WXPAY_SELF), ALIWAP(&quot;支付宝&quot;, 2, &quot;aliwap&quot;, Channel.PAY_ALIPAY), ALIPAY(&quot;支付宝&quot;, 3, &quot;alipay&quot;, Channel.PAY_NULL), UNIONPAY(&quot;银行卡付款&quot;, 4, &quot;unionpay&quot;, Channel.PAY_UNIONPAY), TENPAY(&quot;财付通&quot;, 5, &quot;tenpay&quot;, Channel.PAY_TENPAY), UNIONWAP(&quot;银行卡付款&quot;, 6, &quot;unionwap&quot;, Channel.PAY_UNIONPAY), PEERPAY(&quot;找人代付&quot;, 7, &quot;peerpay&quot;, Channel.PAY_NULL), UMPAY(&quot;联动U付&quot;, 8, &quot;umpay&quot;, Channel.PAY_UMPAY), CODPAY(&quot;货到付款&quot;, 9, &quot;codpay&quot;, Channel.PAY_NULL), WXPAY_BIGUNSIGN(&quot;微信安全支付&quot;, 10, &quot;wxpay_bigunsign&quot;, Channel.PAY_WXPAY), WXPAY_BIGSIGN(&quot;微信安全支付&quot;, 11, &quot;wxpay_bigsign&quot;, Channel.PAY_WXPAY), BDWAP(&quot;储蓄卡付款&quot;, 12, &quot;baiduwap&quot;, Channel.PAY_BDPAY), WXAPPPAY(&quot;储蓄卡付款&quot;, 13, &quot;wxapppay&quot;, Channel.PAY_WXPAY), MERGED_PAY(&quot;分销采购单合并付款&quot;, 14, &quot;merged_pay&quot;, Channel.PAY_NULL), PRESENTPAY(&quot;赠品0元付款&quot;, 15, &quot;presentpay&quot;, Channel.PAY_NULL), COUPONPAY(&quot;优惠全额兑换&quot;, 16, &quot;couponpay&quot;, Channel.PAY_NULL), FXPAY_SPLIT(&quot;分销商分账入款&quot;, 17, &quot;fx_pay_splitting&quot;, Channel.PAY_NULL), AIXUEDAI(&quot;爱学贷分期付款&quot;, 18, &quot;aixuedai&quot;, Channel.PAY_NULL), WXWAPPAY(&quot;微信支付&quot;, 19, &quot;wxwappay&quot;, Channel.PAY_NULL), WXHB(&quot;微信红包&quot;, 20, &quot;wxhb&quot;, Channel.PAY_WXHB), REBATE(&quot;补贴奖励&quot;, 21, &quot;rebeat&quot;, Channel.PAY_REBATE), UMP_RED_PAY(&quot;ump红包支付&quot;, 22, &quot;ump_read_pay&quot;, Channel.PAY_REDPAY), PAYZAY(&quot;PAYZA支付&quot;, 23, &quot;pay_za&quot;, Channel.PAY_PAYZA), YZPAY(&quot;YZPAY支付&quot;, 24, &quot;yzpay&quot;, Channel.PAY_YOUZAN), PREPAID_CARD(&quot;储值卡支付&quot;, 25, &quot;prepaid_card&quot;, Channel.PAY_PREPAID_CARD), PAYPAL(&quot;PAYPAL支付&quot;, 26, &quot;paypal&quot;, Channel.PAY_PAYPAL), QQPAY(&quot;QQPAY支付&quot;, 27, &quot;qqpay&quot;, Channel.PAY_QQPAY), ECARD(&quot;E卡通支付&quot;, 28, &quot;ecard&quot;, Channel.PAY_ECARD), BARCODE_WX(&quot;微信条码支付&quot;, 29, &quot;barcode_wx&quot;, Channel.PAY_BARCODE_WX), BARCODE_ALIPAY(&quot;支付宝条码支付&quot;, 30, &quot;barcode_alipay&quot;, Channel.PAY_BARCODE_ALIPAY), IBOXPAY(&quot;盒子支付&quot;, 31, &quot;iboxpay&quot;, Channel.PAY_IBOXPAY), YIMING_POS(&quot;一鸣POS&quot;, 32, &quot;yiming_pos&quot;, Channel.PAY_YIMING_POS), ALLIN_POS(&quot;通联POS&quot;, 34, &quot;allin_pos&quot;, Channel.PAY_ALLIN_POS), GIFT_CARD(&quot;礼品卡&quot;, 33, &quot;gift_card&quot;, Channel.PAY_GIFT_CARD), BALANCE_PAY(&quot;余额支付&quot;, 100, &quot;balance_pay&quot;, Channel.PAY_BALANCE), YEEPAY(&quot;易宝支付&quot;, 110, &quot;yeepay_pay&quot;, Channel.PAY_YEEPAY), WX_APPLET_PAY(&quot;微信小程序支付&quot;, 71, &quot;wx_applet_pay&quot;, Channel.PAY_WXPAY_SELF), WX_NATIVE(&quot;微信扫码支付&quot;, 72, &quot;wx_native&quot;, Channel.PAY_WXPAY), VALUE_CARD(&quot;储值卡&quot;, 35, &quot;value_card&quot;, Channel.VALUE_CARD), TRANSFER_VOUCHER(&quot;转账凭证&quot;, 73, &quot;transfer_voucher&quot;, Channel.TRANSFER_VOUCHER), WX_TRANSFER(&quot;微信企业付款&quot;, 75, &quot;wx_transfer&quot;, Channel.PAY_WXPAY), CASH_PAY(&quot;现金支付&quot;, 77, &quot;cash_pay&quot;, Channel.PAY_CASH), MARK_PAY(&quot;标记支付&quot;, 76, &quot;mark_pay&quot;, Channel.PAY_MARK), ALIPAY_NATIVE(&quot;支付宝扫码支付&quot;, 78, &quot;alipay_native&quot;, Channel.PAY_ALIPAY), UN_SETTLED_AMOUNT_PAY(&quot;待结算&amp;余额支付&quot;, 80, &quot;purchase_pay&quot;, Channel.UN_SETTLED_AMOUNT_PAY), DISCOUNT_DEDUCTION(&quot;优惠抵扣0元购&quot;, 79, &quot;discount_deduction&quot;, Channel.PAY_DISCOUNT_DEDUCTION), ENCHASHMENT_GIFT_CARD(&quot;新礼品卡&quot;, 90, &quot;enchashment_gift_card&quot;, Channel.ENCHASHMENT_GIFT_CARD), CREDIT_CARD_UNIONPAY(&quot;信用卡银联支付&quot;, 36, &quot;credit_card_unionpay&quot;, Channel.PAY_UNIONPAY), DEBIT_CARD_UNIONPAY(&quot;储蓄卡银联支付&quot;, 37, &quot;debit_card_unionpay&quot;, Channel.PAY_UNIONPAY);
     * @var string
     */
    private $payMethod;

    /**
     * 礼包ID（充值规则扩展点返回参数，如无可为空）
     * @var string
     */
    private $giftPackId;

    /**
     * 礼包版本（充值规则扩展点返回参数，如无可为空）
     * @var string
     */
    private $giftPackVersion;

    /**
     * 描述，说明, 最大120字, 不做校验默认空字符串
     * @var string
     */
    private $remark;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 支付渠道（废弃参数，无需处理）
     * @var int
     */
    private $payChannel;

    /**
     * 标记支付方式（废弃参数，无需处理）
     * @var string
     */
    private $markPayMethod;

    /**
     * 有赞开放ID
     * @var string
     */
    private $yzOpenId;

    /**
     * 总部店铺Id
     * @var int
     */
    private $rootKdtId;



    /**
     * @return string
     */
    public function getRechargeNo(): ?string
    {
        return $this->rechargeNo;
    }

    /**
     * @param string $rechargeNo
     */
    public function setRechargeNo(?string $rechargeNo): void
    {
        $this->rechargeNo = $rechargeNo;
    }

    /**
     * @return string
     */
    public function getAcquireNo(): ?string
    {
        return $this->acquireNo;
    }

    /**
     * @param string $acquireNo
     */
    public function setAcquireNo(?string $acquireNo): void
    {
        $this->acquireNo = $acquireNo;
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
    public function getFactDnom(): ?int
    {
        return $this->factDnom;
    }

    /**
     * @param int $factDnom
     */
    public function setFactDnom(?int $factDnom): void
    {
        $this->factDnom = $factDnom;
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
     * @return int
     */
    public function getBuyerId(): ?int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(?int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return string
     */
    public function getUserPhone(): ?string
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     */
    public function setUserPhone(?string $userPhone): void
    {
        $this->userPhone = $userPhone;
    }

    /**
     * @return string
     */
    public function getPayMethod(): ?string
    {
        return $this->payMethod;
    }

    /**
     * @param string $payMethod
     */
    public function setPayMethod(?string $payMethod): void
    {
        $this->payMethod = $payMethod;
    }

    /**
     * @return string
     */
    public function getGiftPackId(): ?string
    {
        return $this->giftPackId;
    }

    /**
     * @param string $giftPackId
     */
    public function setGiftPackId(?string $giftPackId): void
    {
        $this->giftPackId = $giftPackId;
    }

    /**
     * @return string
     */
    public function getGiftPackVersion(): ?string
    {
        return $this->giftPackVersion;
    }

    /**
     * @param string $giftPackVersion
     */
    public function setGiftPackVersion(?string $giftPackVersion): void
    {
        $this->giftPackVersion = $giftPackVersion;
    }

    /**
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark(?string $remark): void
    {
        $this->remark = $remark;
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
    public function getPayChannel(): ?int
    {
        return $this->payChannel;
    }

    /**
     * @param int $payChannel
     */
    public function setPayChannel(?int $payChannel): void
    {
        $this->payChannel = $payChannel;
    }

    /**
     * @return string
     */
    public function getMarkPayMethod(): ?string
    {
        return $this->markPayMethod;
    }

    /**
     * @param string $markPayMethod
     */
    public function setMarkPayMethod(?string $markPayMethod): void
    {
        $this->markPayMethod = $markPayMethod;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}