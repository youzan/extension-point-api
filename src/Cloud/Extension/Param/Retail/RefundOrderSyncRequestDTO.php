<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use StdClass;
use DateTime;
use Com\Youzan\Cloud\Extension\Param\Retail\YZRefundOrderItemDTO;

/**
 * 
 * @author Baymax
 * @create Thu Jul 25 11:45:35 CST 2019
 */
class RefundOrderSyncRequestDTO implements \JsonSerializable {

    /**
     * 鉴权信息
     * @var stdClass
     */
    private $authMap;

    /**
     * 退款单号
     * @var string
     */
    private $refundNo;

    /**
     * 销售库存 ONLINE:网店 OFFLINE: 门店
     * @var string
     */
    private $saleWay;

    /**
     * 退款申请时间
     * @var DateTime
     */
    private $createTime;

    /**
     * 退款类型： BUYER_APPLY_REFUND&#x3D;买家申请退款 SELLER_REFUND&#x3D;商家主动退款 SYSTEM_REFUND&#x3D;一键退款，特殊类型退款
     * @var string
     */
    private $refundType;

    /**
     * 退货诉求 REFUND_ONLY：仅退款 REFUND_RETURN_GOODS：退货退款
     * @var string
     */
    private $refundDemand;

    /**
     * 退款金额
     * @var string
     */
    private $refundFee;

    /**
     * 退款状态： REFUND_WAIT_SELLER_AGREE&#x3D;买家已经申请退款，等待卖家同意 REFUND_SELLER_REFUSE_BUYER&#x3D;卖家拒绝退款 REFUND_WAIT_BUYER_RETURN_GOODS&#x3D;卖家已经同意退货，等待买家退货 REFUND_WAIT_SELLER_CONFIRM_GOODS&#x3D;买家已经退货，等待卖家确认收货 REFUND_SELLER_REFUSE_RETURN_GOODS&#x3D;卖家未收到货,拒绝退款 REFUND_CLOSED&#x3D;退款关闭 REFUND_SUCCESS&#x3D;退款成功
     * @var string
     */
    private $refundStatus;

    /**
     * 退款单版本号
     * @var int
     */
    private $version;

    /**
     * 退款原因
     * @var string
     */
    private $reasonDesc;

    /**
     * 买家昵称
     * @var string
     */
    private $buyerName;

    /**
     * 退款明细
     * @var array
     */
    private $refundItems;



    /**
     * @return stdClass
     */
    public function getAuthMap(): stdClass
    {
        return $this->authMap;
    }

    /**
     * @param stdClass $authMap
     */
    public function setAuthMap(stdClass $authMap): void
    {
        $this->authMap = $authMap;
    }

    /**
     * @return string
     */
    public function getRefundNo(): string
    {
        return $this->refundNo;
    }

    /**
     * @param string $refundNo
     */
    public function setRefundNo(string $refundNo): void
    {
        $this->refundNo = $refundNo;
    }

    /**
     * @return string
     */
    public function getSaleWay(): string
    {
        return $this->saleWay;
    }

    /**
     * @param string $saleWay
     */
    public function setSaleWay(string $saleWay): void
    {
        $this->saleWay = $saleWay;
    }

    /**
     * @return DateTime
     */
    public function getCreateTime(): DateTime
    {
        return $this->createTime;
    }

    /**
     * @param DateTime $createTime
     */
    public function setCreateTime(DateTime $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return string
     */
    public function getRefundType(): string
    {
        return $this->refundType;
    }

    /**
     * @param string $refundType
     */
    public function setRefundType(string $refundType): void
    {
        $this->refundType = $refundType;
    }

    /**
     * @return string
     */
    public function getRefundDemand(): string
    {
        return $this->refundDemand;
    }

    /**
     * @param string $refundDemand
     */
    public function setRefundDemand(string $refundDemand): void
    {
        $this->refundDemand = $refundDemand;
    }

    /**
     * @return string
     */
    public function getRefundFee(): string
    {
        return $this->refundFee;
    }

    /**
     * @param string $refundFee
     */
    public function setRefundFee(string $refundFee): void
    {
        $this->refundFee = $refundFee;
    }

    /**
     * @return string
     */
    public function getRefundStatus(): string
    {
        return $this->refundStatus;
    }

    /**
     * @param string $refundStatus
     */
    public function setRefundStatus(string $refundStatus): void
    {
        $this->refundStatus = $refundStatus;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @param int $version
     */
    public function setVersion(int $version): void
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getReasonDesc(): string
    {
        return $this->reasonDesc;
    }

    /**
     * @param string $reasonDesc
     */
    public function setReasonDesc(string $reasonDesc): void
    {
        $this->reasonDesc = $reasonDesc;
    }

    /**
     * @return string
     */
    public function getBuyerName(): string
    {
        return $this->buyerName;
    }

    /**
     * @param string $buyerName
     */
    public function setBuyerName(string $buyerName): void
    {
        $this->buyerName = $buyerName;
    }

    /**
     * @return array
     */
    public function getRefundItems(): array
    {
        return $this->refundItems;
    }

    /**
     * @param array $refundItems
     */
    public function setRefundItems(array $refundItems): void
    {
        $this->refundItems = $refundItems;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}