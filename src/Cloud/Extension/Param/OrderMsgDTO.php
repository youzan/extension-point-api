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
 * 订单
 * @author Baymax
 * @create 2018-10-22 20:30:57.0
 */
class OrderMsgDTO implements \JsonSerializable {

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extra;

    /**
     * 关闭类型值，0：未关闭；1：过期关闭；2：标记退款；3：订单取消；4：买家取消；5：卖家取消；6：部分退款；10：无法联系上买家；11：买家误拍或重拍了；12：买家无诚意完成交易；13：已通过银行线下汇款；14：已通过同城见面交易；15：已通过货到付款交易；16：已通过网上银行直接汇款；17：已经缺货无法交易；18：扣款失败
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
     * @var int
     */
    private $expiredTime;

    /**
     * 订单取消时间
     * @var int
     */
    private $closeTime;

    /**
     * 订单生效时间
     * @var int
     */
    private $effectTime;

    /**
     * 订单更新时间
     * @var int
     */
    private $updateTime;

    /**
     * 订单完成时间
     * @var int
     */
    private $successTime;

    /**
     * 订单收货时间
     * @var int
     */
    private $receiveTime;

    /**
     * 商家确认时间
     * @var int
     */
    private $confirmTime;

    /**
     * 发货时间
     * @var int
     */
    private $shipTime;

    /**
     * 支付方式
     * @var string
     */
    private $payWay;

    /**
     * 订单支付时间
     * @var int
     */
    private $payTime;

    /**
     * 订单创建时间
     * @var int
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
     * 销售模式，0：普通模式；1：定金预售
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
     * @return int
     */
    public function getExpiredTime(): int
    {
        return $this->expiredTime;
    }

    /**
     * @param int $expiredTime
     */
    public function setExpiredTime(int $expiredTime): void
    {
        $this->expiredTime = $expiredTime;
    }

    /**
     * @return int
     */
    public function getCloseTime(): int
    {
        return $this->closeTime;
    }

    /**
     * @param int $closeTime
     */
    public function setCloseTime(int $closeTime): void
    {
        $this->closeTime = $closeTime;
    }

    /**
     * @return int
     */
    public function getEffectTime(): int
    {
        return $this->effectTime;
    }

    /**
     * @param int $effectTime
     */
    public function setEffectTime(int $effectTime): void
    {
        $this->effectTime = $effectTime;
    }

    /**
     * @return int
     */
    public function getUpdateTime(): int
    {
        return $this->updateTime;
    }

    /**
     * @param int $updateTime
     */
    public function setUpdateTime(int $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return int
     */
    public function getSuccessTime(): int
    {
        return $this->successTime;
    }

    /**
     * @param int $successTime
     */
    public function setSuccessTime(int $successTime): void
    {
        $this->successTime = $successTime;
    }

    /**
     * @return int
     */
    public function getReceiveTime(): int
    {
        return $this->receiveTime;
    }

    /**
     * @param int $receiveTime
     */
    public function setReceiveTime(int $receiveTime): void
    {
        $this->receiveTime = $receiveTime;
    }

    /**
     * @return int
     */
    public function getConfirmTime(): int
    {
        return $this->confirmTime;
    }

    /**
     * @param int $confirmTime
     */
    public function setConfirmTime(int $confirmTime): void
    {
        $this->confirmTime = $confirmTime;
    }

    /**
     * @return int
     */
    public function getShipTime(): int
    {
        return $this->shipTime;
    }

    /**
     * @param int $shipTime
     */
    public function setShipTime(int $shipTime): void
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
     * @return int
     */
    public function getPayTime(): int
    {
        return $this->payTime;
    }

    /**
     * @param int $payTime
     */
    public function setPayTime(int $payTime): void
    {
        $this->payTime = $payTime;
    }

    /**
     * @return int
     */
    public function getCreateTime(): int
    {
        return $this->createTime;
    }

    /**
     * @param int $createTime
     */
    public function setCreateTime(int $createTime): void
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