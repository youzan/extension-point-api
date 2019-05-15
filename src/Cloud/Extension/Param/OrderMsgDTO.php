<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\OrderItemMsgDTO;
use DateTime;
use Com\Youzan\Cloud\Extension\Param\LogisticsDTO;
use Com\Youzan\Cloud\Extension\Param\PromotionDTO;
use Com\Youzan\Cloud\Extension\Param\PriceDTO;
use Com\Youzan\Cloud\Extension\Param\SellerDTO;
use Com\Youzan\Cloud\Extension\Param\BuyerDTO;

/**
 * 
 * @author Baymax
 * @create Mon Oct 22 20:30:57 CST 2018
 */
class OrderMsgDTO implements \JsonSerializable {

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extra;

    /**
     * 关闭类型值
     * @var int
     */
    private $closeTypeValue;

    /**
     * 子订单信息
     * @var array
     */
    private $orderItemDTOGroup;

    /**
     * 标记
     * @var stdClass
     */
    private $tags;

    /**
     * 订单备注
     * @var string
     */
    private $memo;

    /**
     * 关闭原因
     * @var string
     */
    private $closeReason;

    /**
     * 关闭类型
     * @var string
     */
    private $closeType;

    /**
     * 超期时间
     * @var DateTime
     */
    private $expiredTime;

    /**
     * 订单取消时间
     * @var DateTime
     */
    private $closeTime;

    /**
     * 订单生效时间
     * @var DateTime
     */
    private $effectTime;

    /**
     * 订单更新时间
     * @var DateTime
     */
    private $updateTime;

    /**
     * 订单完成时间
     * @var DateTime
     */
    private $successTime;

    /**
     * 订单收货时间
     * @var DateTime
     */
    private $receiveTime;

    /**
     * 商家确认时间
     * @var DateTime
     */
    private $confirmTime;

    /**
     * 发货时间
     * @var DateTime
     */
    private $shipTime;

    /**
     * 支付方式
     * @var string
     */
    private $payWay;

    /**
     * 订单支付时间
     * @var DateTime
     */
    private $payTime;

    /**
     * 订单创建时间
     * @var DateTime
     */
    private $createTime;

    /**
     * 地址信息
     * @var LogisticsDTO
     */
    private $logisticsDTO;

    /**
     * 优惠信息
     * @var PromotionDTO
     */
    private $promotion;

    /**
     * 交易来源
     * @var string
     */
    private $source;

    /**
     * 阶段
     * @var int
     */
    private $phase;

    /**
     * 价格信息
     * @var PriceDTO
     */
    private $priceDTO;

    /**
     * 组件状态
     * @var string
     */
    private $consumeStatus;

    /**
     * 销售模式
     * @var int
     */
    private $salesModelType;

    /**
     * 活动类型
     * @var int
     */
    private $activityType;

    /**
     * 支付类型
     * @var int
     */
    private $payType;

    /**
     * 商品类型
     * @var int
     */
    private $goodsType;

    /**
     * 订单状态
     * @var string
     */
    private $orderStatus;

    /**
     * 订单交易类型
     * @var string
     */
    private $orderType;

    /**
     * 垂直行业大类
     * @var string
     */
    private $bizCategory;

    /**
     * 卖家信息
     * @var SellerDTO
     */
    private $sellerDTO;

    /**
     * 买家信息
     * @var BuyerDTO
     */
    private $buyerDTO;

    /**
     * 支付收单号
     * @var string
     */
    private $payId;

    /**
     * 合同id
     * @var int
     */
    private $contractId;

    /**
     * 订单渠道来源
     * @var string
     */
    private $channelType;

    /**
     * 外部业务单号
     * @var string
     */
    private $outBizNo;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单id(整数类型)
     * @var int
     */
    private $id;



    /**
     * @return stdClass
     */
    public function getExtra(): stdClass
    {
        return $this->extra;
    }

    /**
     * @param stdClass $extra
     */
    public function setExtra(stdClass $extra): void
    {
        $this->extra = $extra;
    }

    /**
     * @return int
     */
    public function getCloseTypeValue(): int
    {
        return $this->closeTypeValue;
    }

    /**
     * @param int $closeTypeValue
     */
    public function setCloseTypeValue(int $closeTypeValue): void
    {
        $this->closeTypeValue = $closeTypeValue;
    }

    /**
     * @return array
     */
    public function getOrderItemDTOGroup(): array
    {
        return $this->orderItemDTOGroup;
    }

    /**
     * @param array $orderItemDTOGroup
     */
    public function setOrderItemDTOGroup(array $orderItemDTOGroup): void
    {
        $this->orderItemDTOGroup = $orderItemDTOGroup;
    }

    /**
     * @return stdClass
     */
    public function getTags(): stdClass
    {
        return $this->tags;
    }

    /**
     * @param stdClass $tags
     */
    public function setTags(stdClass $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param string $memo
     */
    public function setMemo(string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * @return string
     */
    public function getCloseReason(): string
    {
        return $this->closeReason;
    }

    /**
     * @param string $closeReason
     */
    public function setCloseReason(string $closeReason): void
    {
        $this->closeReason = $closeReason;
    }

    /**
     * @return string
     */
    public function getCloseType(): string
    {
        return $this->closeType;
    }

    /**
     * @param string $closeType
     */
    public function setCloseType(string $closeType): void
    {
        $this->closeType = $closeType;
    }

    /**
     * @return DateTime
     */
    public function getExpiredTime(): DateTime
    {
        return $this->expiredTime;
    }

    /**
     * @param DateTime $expiredTime
     */
    public function setExpiredTime(DateTime $expiredTime): void
    {
        $this->expiredTime = $expiredTime;
    }

    /**
     * @return DateTime
     */
    public function getCloseTime(): DateTime
    {
        return $this->closeTime;
    }

    /**
     * @param DateTime $closeTime
     */
    public function setCloseTime(DateTime $closeTime): void
    {
        $this->closeTime = $closeTime;
    }

    /**
     * @return DateTime
     */
    public function getEffectTime(): DateTime
    {
        return $this->effectTime;
    }

    /**
     * @param DateTime $effectTime
     */
    public function setEffectTime(DateTime $effectTime): void
    {
        $this->effectTime = $effectTime;
    }

    /**
     * @return DateTime
     */
    public function getUpdateTime(): DateTime
    {
        return $this->updateTime;
    }

    /**
     * @param DateTime $updateTime
     */
    public function setUpdateTime(DateTime $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return DateTime
     */
    public function getSuccessTime(): DateTime
    {
        return $this->successTime;
    }

    /**
     * @param DateTime $successTime
     */
    public function setSuccessTime(DateTime $successTime): void
    {
        $this->successTime = $successTime;
    }

    /**
     * @return DateTime
     */
    public function getReceiveTime(): DateTime
    {
        return $this->receiveTime;
    }

    /**
     * @param DateTime $receiveTime
     */
    public function setReceiveTime(DateTime $receiveTime): void
    {
        $this->receiveTime = $receiveTime;
    }

    /**
     * @return DateTime
     */
    public function getConfirmTime(): DateTime
    {
        return $this->confirmTime;
    }

    /**
     * @param DateTime $confirmTime
     */
    public function setConfirmTime(DateTime $confirmTime): void
    {
        $this->confirmTime = $confirmTime;
    }

    /**
     * @return DateTime
     */
    public function getShipTime(): DateTime
    {
        return $this->shipTime;
    }

    /**
     * @param DateTime $shipTime
     */
    public function setShipTime(DateTime $shipTime): void
    {
        $this->shipTime = $shipTime;
    }

    /**
     * @return string
     */
    public function getPayWay(): string
    {
        return $this->payWay;
    }

    /**
     * @param string $payWay
     */
    public function setPayWay(string $payWay): void
    {
        $this->payWay = $payWay;
    }

    /**
     * @return DateTime
     */
    public function getPayTime(): DateTime
    {
        return $this->payTime;
    }

    /**
     * @param DateTime $payTime
     */
    public function setPayTime(DateTime $payTime): void
    {
        $this->payTime = $payTime;
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
     * @return LogisticsDTO
     */
    public function getLogisticsDTO(): LogisticsDTO
    {
        return $this->logisticsDTO;
    }

    /**
     * @param LogisticsDTO $logisticsDTO
     */
    public function setLogisticsDTO(LogisticsDTO $logisticsDTO): void
    {
        $this->logisticsDTO = $logisticsDTO;
    }

    /**
     * @return PromotionDTO
     */
    public function getPromotion(): PromotionDTO
    {
        return $this->promotion;
    }

    /**
     * @param PromotionDTO $promotion
     */
    public function setPromotion(PromotionDTO $promotion): void
    {
        $this->promotion = $promotion;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    /**
     * @return int
     */
    public function getPhase(): int
    {
        return $this->phase;
    }

    /**
     * @param int $phase
     */
    public function setPhase(int $phase): void
    {
        $this->phase = $phase;
    }

    /**
     * @return PriceDTO
     */
    public function getPriceDTO(): PriceDTO
    {
        return $this->priceDTO;
    }

    /**
     * @param PriceDTO $priceDTO
     */
    public function setPriceDTO(PriceDTO $priceDTO): void
    {
        $this->priceDTO = $priceDTO;
    }

    /**
     * @return string
     */
    public function getConsumeStatus(): string
    {
        return $this->consumeStatus;
    }

    /**
     * @param string $consumeStatus
     */
    public function setConsumeStatus(string $consumeStatus): void
    {
        $this->consumeStatus = $consumeStatus;
    }

    /**
     * @return int
     */
    public function getSalesModelType(): int
    {
        return $this->salesModelType;
    }

    /**
     * @param int $salesModelType
     */
    public function setSalesModelType(int $salesModelType): void
    {
        $this->salesModelType = $salesModelType;
    }

    /**
     * @return int
     */
    public function getActivityType(): int
    {
        return $this->activityType;
    }

    /**
     * @param int $activityType
     */
    public function setActivityType(int $activityType): void
    {
        $this->activityType = $activityType;
    }

    /**
     * @return int
     */
    public function getPayType(): int
    {
        return $this->payType;
    }

    /**
     * @param int $payType
     */
    public function setPayType(int $payType): void
    {
        $this->payType = $payType;
    }

    /**
     * @return int
     */
    public function getGoodsType(): int
    {
        return $this->goodsType;
    }

    /**
     * @param int $goodsType
     */
    public function setGoodsType(int $goodsType): void
    {
        $this->goodsType = $goodsType;
    }

    /**
     * @return string
     */
    public function getOrderStatus(): string
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     */
    public function setOrderStatus(string $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return string
     */
    public function getOrderType(): string
    {
        return $this->orderType;
    }

    /**
     * @param string $orderType
     */
    public function setOrderType(string $orderType): void
    {
        $this->orderType = $orderType;
    }

    /**
     * @return string
     */
    public function getBizCategory(): string
    {
        return $this->bizCategory;
    }

    /**
     * @param string $bizCategory
     */
    public function setBizCategory(string $bizCategory): void
    {
        $this->bizCategory = $bizCategory;
    }

    /**
     * @return SellerDTO
     */
    public function getSellerDTO(): SellerDTO
    {
        return $this->sellerDTO;
    }

    /**
     * @param SellerDTO $sellerDTO
     */
    public function setSellerDTO(SellerDTO $sellerDTO): void
    {
        $this->sellerDTO = $sellerDTO;
    }

    /**
     * @return BuyerDTO
     */
    public function getBuyerDTO(): BuyerDTO
    {
        return $this->buyerDTO;
    }

    /**
     * @param BuyerDTO $buyerDTO
     */
    public function setBuyerDTO(BuyerDTO $buyerDTO): void
    {
        $this->buyerDTO = $buyerDTO;
    }

    /**
     * @return string
     */
    public function getPayId(): string
    {
        return $this->payId;
    }

    /**
     * @param string $payId
     */
    public function setPayId(string $payId): void
    {
        $this->payId = $payId;
    }

    /**
     * @return int
     */
    public function getContractId(): int
    {
        return $this->contractId;
    }

    /**
     * @param int $contractId
     */
    public function setContractId(int $contractId): void
    {
        $this->contractId = $contractId;
    }

    /**
     * @return string
     */
    public function getChannelType(): string
    {
        return $this->channelType;
    }

    /**
     * @param string $channelType
     */
    public function setChannelType(string $channelType): void
    {
        $this->channelType = $channelType;
    }

    /**
     * @return string
     */
    public function getOutBizNo(): string
    {
        return $this->outBizNo;
    }

    /**
     * @param string $outBizNo
     */
    public function setOutBizNo(string $outBizNo): void
    {
        $this->outBizNo = $outBizNo;
    }

    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}