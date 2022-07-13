<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\RefundOrderItemDTO;

/**
 * 历史退款记录列表
 * @author Baymax
 * @create Thu Jan 13 20:54:23 CST 2022
 */
class RefundOrderDTO implements \JsonSerializable {

    /**
     * 维权ID（售后单编号），售后申请时有赞系统自动生成一串数字组合，生成规则：年月日时分秒+10位随机数。
     * @var string
     */
    private $refundId;

    /**
     * 退款金额，单位：分
     * @var int
     */
    private $refundFee;

    /**
     * 邮费，单位是分
     * @var int
     */
    private $postage;

    /**
     * 退款流程类型，1:退款 - 申请退款/退货流程；2:退款 - 主动退款流程；3:退款 - 一键退款流程；4:换货 - 零售门店换货；5:换货-网店换货。
     * @var int
     */
    private $type;

    /**
     * 退款状态，枚举有：1:买家已经申请售后，等待卖家同意；10:卖家拒绝售后申请，等待买家处理；20:卖家同意售后申请，等待买家退货；30:买家已经退货，等待卖家确认收货；40:卖家拒绝收货，等待买家处理；45:商家已经发货，等待买家确认收货；50:售后关闭；60:售后成功
     * @var int
     */
    private $status;

    /**
     * 支付类型，枚举有：0:老的方式,支付方式与支付渠道组合在一起；1:无需支付；2:现付；3:部分支付；4:货到付款；5:线下收银；6:单次支付；7:阶段支付；8:外部支付
     * @var int
     */
    private $payType;

    /**
     * 支付方式，枚举值太多，列举一些常用的：0:默认值,未支付；1:微信自有支付；2:支付宝wap；3:支付宝wap；4:；5:财付通；6:；7:代付；8:联动优势；9:货到付款；10:大账号代销；11:受理模式；12:百付宝；13:sdk支付；14:合并付货款；15:领取赠品；16:优惠兑换；17:自动付货款；18:爱学贷；19:微信wap；20:微信红包支付；21:返利；22:ump红包；23:；24:易宝支付；25:储值卡；26:；27:qq支付；28:有赞E卡支付；29:微信条码；30:支付宝条码；33:礼品卡支付；35:会员余额；36:信用卡银联支付；37:储蓄卡银联支付；40:分期支付；72:微信扫码二维码支付；80:待结算&amp;余额支付；90:礼品卡支付；
     * @var int
     */
    private $payway;

    /**
     * 历史退款的商品
     * @var array
     */
    private $itemList;



    /**
     * @return string
     */
    public function getRefundId(): ?string
    {
        return $this->refundId;
    }

    /**
     * @param string $refundId
     */
    public function setRefundId(?string $refundId): void
    {
        $this->refundId = $refundId;
    }

    /**
     * @return int
     */
    public function getRefundFee(): ?int
    {
        return $this->refundFee;
    }

    /**
     * @param int $refundFee
     */
    public function setRefundFee(?int $refundFee): void
    {
        $this->refundFee = $refundFee;
    }

    /**
     * @return int
     */
    public function getPostage(): ?int
    {
        return $this->postage;
    }

    /**
     * @param int $postage
     */
    public function setPostage(?int $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getPayType(): ?int
    {
        return $this->payType;
    }

    /**
     * @param int $payType
     */
    public function setPayType(?int $payType): void
    {
        $this->payType = $payType;
    }

    /**
     * @return int
     */
    public function getPayway(): ?int
    {
        return $this->payway;
    }

    /**
     * @param int $payway
     */
    public function setPayway(?int $payway): void
    {
        $this->payway = $payway;
    }

    /**
     * @return array
     */
    public function getItemList(): ?array
    {
        return $this->itemList;
    }

    /**
     * @param array $itemList
     */
    public function setItemList(?array $itemList): void
    {
        $this->itemList = $itemList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}