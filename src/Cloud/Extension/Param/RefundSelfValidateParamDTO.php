<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\RefundItemDTO;
use Com\Youzan\Cloud\Extension\Param\OrderItemDTO;

/**
 * 
 * @author Baymax
 * @create 2018-10-08 16:18:50.0
 */
class RefundSelfValidateParamDTO implements \JsonSerializable {

    /**
     * 客户Id（有赞用户ID，在有赞平台账号平台下唯一。)
     * @var string
     */
    private $userId;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;

    /**
     * 退款原因
     * @var int
     */
    private $reason;

    /**
     * 有赞订单号，E开头+年月日时分秒+随机数，长度24位字母和数字组合
     * @var string
     */
    private $orderNo;

    /**
     * 用户纠纷处理的流程类型+纠纷诉求， 用户纠纷处理的流程类型DisputeFlowTypeEnum的枚举有： BUYER_REFUND_FLOW:退款 - 申请退款/退货流程；SELLER_REFUND_FLOW:退款 - 主动退款流程；ONE_KEY_REFUND_FLOW:退款 - 一键退款流程；RETAIL_STORE_EXCHANGE_GOODS_FLOW:换货 - 零售门店换货；EXCHANGE_GOODS_FLOW:换货-网店换货。 纠纷诉求disputeDemandEnum的枚举有： REFUND_ONLY:仅退款；REFUND_RETURN_GOODS:退货退款；EXCHANGE_GOODS:换货
     * @var string
     */
    private $disputeFlowType;

    /**
     * 退款商品信息
     * @var array
     */
    private $refundOrderItems;

    /**
     * 
     * @var array
     */
    private $orderItems;

    /**
     * WXPAY:微信自有支付,ALIWAP:支付宝wap,ALIPAY:支付宝wap,TENPAY:财付通,PEERPAY:代付,UMPAY:联动优势,CODPAY:货到付款,WXPAY_DAIXIAO:大账号代销,WXPAY_SHOULI:受理模式,BAIDUWAP:百付宝,WX_APPPAY:sdk支付,FX_MERGED:合并付货款,UMP_PRESENT:领取赠品,UMP_COUPON:优惠兑换,FX_SPLITTING:自动付货款,AIXUEDAI:爱学贷,WX_WAPPAY:微信wap,WX_HB:微信红包支付,UMP_REBATE:返利,UMP_HB:ump红包,YZPAY:易宝支付,PREPAID_CARD:储值卡,QQPAY:qq支付,ECARD:有赞E卡支付,BARCODE_WX:微信条码,BARCODE_ALIPAY:支付宝条码,GIFT_CARD:礼品卡支付,UNIFIED_PREPAID_CARD:会员余额,CREDIT_CARD_UNIONPAY:信用卡银联支付,DEBIT_CARD_UNIONPAY:储蓄卡银联支付,INSTALMENT:分期支付,PRIOR_USE:先用后付,WX_NATIVE:微信扫码二维码支付,UN_SETTLED_AMOUNT_PAY:待结算&amp;余额支付,ENCHASHMENT_GIFT_CARD:礼品卡支付,OF_ONLINE_ACCOUNT:代收账户,OF_ONLINE_PREPAID_ACCOUNT:储值账户,OF_ONLINE_DEPOSIT_ACCOUNT:保证金账户,OF_YOUZAN_QR:收款码,OF_WEIXIN:微信,OF_ALIPAY:支付宝,OF_POS:刷卡,OF_TABLE_CARD:二维码台卡,OF_PREPAID_CARD:储值卡,OF_E_CARD:有赞E卡,MARK_PAY_WXPAY:标记收款-自有微信支付,MARK_PAY_ALIPAY:标记收款-自有支付宝,MARK_PAY_POS:标记收款-自有POS刷卡,ALLIN_SWIPECARD:通联刷卡支付,MARK_PAY_DIY:标记收款-自定义,CHANGE_PAY:有赞零钱支付,UMP_PAY:优惠全额抵扣,SUNMI_WX:商米支付,SUNMI_ALIPAY:商米支付-支付宝,SUNMI_SWIPECARD:商米pos,OF_OFFLINE_ACCOUNT:记账账户,OF_CASH:现金,MIXED_PAYMENT:组合支付,OUTSIDE_PAYMENT:外部支付,TRANSFER_VOUCHER:汇款支付,MARK_PAY_CREDIT_PAY:标记收款-挂账支付,TRANSFER_TO_PUBLIC:对公转账,ABC_EPAY:农行商E付,ALIPAY_FLOWER:花呗支付,ALIPAY_AGREEMENT:支付宝免密支付,ALIPAY_APPLET:支付宝-用户付,ELECTRONIC_BANK_PAY:银联网银支付
     * @var string
     */
    private $payWay;

    /**
     * 实际支付的金额，单位：分
     * @var int
     */
    private $realPrice;



    /**
     * @return string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(?string $userId): void
    {
        $this->userId = $userId;
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
    public function getReason(): ?int
    {
        return $this->reason;
    }

    /**
     * @param int $reason
     */
    public function setReason(?int $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return string
     */
    public function getDisputeFlowType(): ?string
    {
        return $this->disputeFlowType;
    }

    /**
     * @param string $disputeFlowType
     */
    public function setDisputeFlowType(?string $disputeFlowType): void
    {
        $this->disputeFlowType = $disputeFlowType;
    }

    /**
     * @return array
     */
    public function getRefundOrderItems(): ?array
    {
        return $this->refundOrderItems;
    }

    /**
     * @param array $refundOrderItems
     */
    public function setRefundOrderItems(?array $refundOrderItems): void
    {
        $this->refundOrderItems = $refundOrderItems;
    }

    /**
     * @return array
     */
    public function getOrderItems(): ?array
    {
        return $this->orderItems;
    }

    /**
     * @param array $orderItems
     */
    public function setOrderItems(?array $orderItems): void
    {
        $this->orderItems = $orderItems;
    }

    /**
     * @return string
     */
    public function getPayWay(): ?string
    {
        return $this->payWay;
    }

    /**
     * @param string $payWay
     */
    public function setPayWay(?string $payWay): void
    {
        $this->payWay = $payWay;
    }

    /**
     * @return int
     */
    public function getRealPrice(): ?int
    {
        return $this->realPrice;
    }

    /**
     * @param int $realPrice
     */
    public function setRealPrice(?int $realPrice): void
    {
        $this->realPrice = $realPrice;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}