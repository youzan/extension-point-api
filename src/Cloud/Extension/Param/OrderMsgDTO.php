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
     * 关闭类型，枚举有：0:未关闭；1:过期关闭；2:标记退款；3:订单取消；4:买家取消；5:卖家取消；6:部分退款；10:无法联系上买家；11:买家误拍或重拍了；12:买家无诚意完成交易；13:已通过银行线下汇款；14:已通过同城见面交易；15:已通过货到付款交易；16:已通过网上银行直接汇款；17:已经缺货无法交易；18:扣款失败；19:0元关单；20:社区团购活动结束未付款；21:0元抽奖订单未中一等奖；22:拒单退款；23:主播寄样申请被拒绝
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
     * 支付方式，枚举值太多，列举部分：0:默认值,未支付；1:微信自有支付；2:支付宝wap；3:支付宝wap；4:；5:财付通；6:；7:代付；8:联动优势；9:货到付款；10:大账号代销；11:受理模式；12:百付宝；13:sdk支付；14:合并付货款；15:领取赠品；16:优惠兑换；17:自动付货款；18:爱学贷；19:微信wap；20:微信红包支付；21:返利；22:ump红包；23:；24:易宝支付；25:储值卡；26:；27:qq支付；28:有赞E卡支付；29:微信条码；30:支付宝条码；33:礼品卡支付；35:会员余额；36:信用卡银联支付；37:储蓄卡银联支付；40:分期支付；72:微信扫码二维码支付；80:待结算&amp;余额支付；90:礼品卡支付；
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
     * 消费状态
     * @var string
     */
    private $consumeStatus;

    /**
     * 销售模式，0：普通模式；1：定金预售
     * @var int
     */
    private $salesModelType;

    /**
     * 活动类型，枚举为：1:没有活动；2:团购返现；3:降价拍；4:拼团；5:积分兑换；6:秒杀；7:优惠套餐；8:赠品；9:商品扫码；10:会员折扣；11:限时折扣；12:众筹；13:周期购；14:送礼；15:随机点餐；16:扫码优惠；19:享立减；20:F码；21:助力砍价；22:推荐有奖；23:抽奖拼团；24:加价购；63:送礼社区版；101:满减送；102:订单返现；103:供货商满包邮；114:定金膨胀；115:第二件半价；256:积分抵现；62:精选老带新拼团；116:助力定金膨胀；26:阶梯拼团；205:内购；258:集点卡兑换；259:学费抵扣；202:会员等级商品优惠；204:0元抽奖码；401:盲盒获取；402:盲盒核销；508:社群接龙；509:限时到店优惠
     * @var int
     */
    private $activityType;

    /**
     * 支付类型，枚举值为：0:老的方式,支付方式与支付渠道组合在一起；1:无需支付；2:现付；3:部分支付；4:货到付款；5:线下收银；6:单次支付；7:阶段支付；8:外部支付
     * @var int
     */
    private $payType;

    /**
     * 商品类型，枚举值为：0:普通类型商品；1:拍卖商品；5:餐饮商品；10:分销商品；20:会员卡商品；21:礼品卡商品；23:有赞会议商品；24:周期购；30:收银台商品；31:知识付费商品；35:酒店商品；40:普通服务类商品；71:卡项商品；182:普通虚拟商品；183:电子卡券商品；184:混合类型；201:外部会员卡商品；202:外部直接收款商品；203:外部普通商品；204:外部服务商品；205:mock不存在商品；206:小程序二维码；207:积分充值商品；208:付费优惠券商品
     * @var int
     */
    private $goodsType;

    /**
     * 订单状态，枚举值为：CREATED:已下单；WAIT_PAY:待支付；PAID:已支付；WAIT_CONFIRM:待接单；CONFIRMED:已接单；WAIT_SHIPPED:待发货；SHIPPED:已发货；WAIT_RECEIVED:待收货；RECEIVED:已收货；UNVISIBLE:不可见；CLOSED:已关闭；SUCCESS:已完成
     * @var string
     */
    private $orderStatus;

    /**
     * 订单交易类型，枚举为：NORMAL:普通订单；PEERPAY:代付；GIFT:送礼订单；FX_CAIGOUDAN:分销采购单；PRESENT:赠品；WISH:心愿单；QRCODE:二维码订单；QRCODE_3RD:线下收银台订单；FX_MERGED:合并付货款；VERIFIED:1分钱实名认证；PINJIAN:品鉴；REBATE:返利；FX_QUANYUANDIAN:全员开店；FX_DEPOSIT:保证金；PF:批发；GROUP:拼团；HOTEL:酒店；TAKE_AWAY:外卖；CATERING_OFFLINE:堂食点餐；CATERING_QRCODE:外卖买单；BEAUTY_APPOINTMENT:美业预约单；BEAUTY_SERVICE:美业服务单；KNOWLEDGE_PAY:知识付费；GIFT_CARD:礼品卡；LIVE_SUPPLIER:直播带货订单；SAMPLE:样品订单
     * @var string
     */
    private $orderType;

    /**
     * 垂直行业大类，枚举为：COMMON:普通担保交易；HOTEL:酒店；BEAUTY:美业；OFFLINE_CATERING:餐饮；TAKEOUT:外卖；RETAIL:门店零售；EXTERNAL:第三方；YZ_CLOUD:有赞电商云；LIVE_SAMPLE:直播寄样；TEST:测试场景
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
     * 订单渠道来源，YOUZAN:有赞内部系统；ELEME_FOOD:饿了么餐饮系统；MEITUAN_FOOD:美团餐饮系统；CANDAO:餐道；GUANYI:管易；CWJ:宠物家
     * @var string
     */
    private $channelType;

    /**
     * 外部业务单号
     * @var string
     */
    private $outBizNo;

    /**
     * 有赞订单号，E开头+年月日时分秒+随机数，长度24位字母和数字组合
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
    public function getExtra(): ?stdClass
    {
        return $this->extra;
    }

    /**
     * @param stdClass $extra
     */
    public function setExtra(?stdClass $extra): void
    {
        $this->extra = $extra;
    }

    /**
     * @return int
     */
    public function getCloseTypeValue(): ?int
    {
        return $this->closeTypeValue;
    }

    /**
     * @param int $closeTypeValue
     */
    public function setCloseTypeValue(?int $closeTypeValue): void
    {
        $this->closeTypeValue = $closeTypeValue;
    }

    /**
     * @return array
     */
    public function getOrderItemDTOGroup(): ?array
    {
        return $this->orderItemDTOGroup;
    }

    /**
     * @param array $orderItemDTOGroup
     */
    public function setOrderItemDTOGroup(?array $orderItemDTOGroup): void
    {
        $this->orderItemDTOGroup = $orderItemDTOGroup;
    }

    /**
     * @return stdClass
     */
    public function getTags(): ?stdClass
    {
        return $this->tags;
    }

    /**
     * @param stdClass $tags
     */
    public function setTags(?stdClass $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return string
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * @param string $memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * @return string
     */
    public function getCloseReason(): ?string
    {
        return $this->closeReason;
    }

    /**
     * @param string $closeReason
     */
    public function setCloseReason(?string $closeReason): void
    {
        $this->closeReason = $closeReason;
    }

    /**
     * @return string
     */
    public function getCloseType(): ?string
    {
        return $this->closeType;
    }

    /**
     * @param string $closeType
     */
    public function setCloseType(?string $closeType): void
    {
        $this->closeType = $closeType;
    }

    /**
     * @return int
     */
    public function getExpiredTime(): ?int
    {
        return $this->expiredTime;
    }

    /**
     * @param int $expiredTime
     */
    public function setExpiredTime(?int $expiredTime): void
    {
        $this->expiredTime = $expiredTime;
    }

    /**
     * @return int
     */
    public function getCloseTime(): ?int
    {
        return $this->closeTime;
    }

    /**
     * @param int $closeTime
     */
    public function setCloseTime(?int $closeTime): void
    {
        $this->closeTime = $closeTime;
    }

    /**
     * @return int
     */
    public function getEffectTime(): ?int
    {
        return $this->effectTime;
    }

    /**
     * @param int $effectTime
     */
    public function setEffectTime(?int $effectTime): void
    {
        $this->effectTime = $effectTime;
    }

    /**
     * @return int
     */
    public function getUpdateTime(): ?int
    {
        return $this->updateTime;
    }

    /**
     * @param int $updateTime
     */
    public function setUpdateTime(?int $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return int
     */
    public function getSuccessTime(): ?int
    {
        return $this->successTime;
    }

    /**
     * @param int $successTime
     */
    public function setSuccessTime(?int $successTime): void
    {
        $this->successTime = $successTime;
    }

    /**
     * @return int
     */
    public function getReceiveTime(): ?int
    {
        return $this->receiveTime;
    }

    /**
     * @param int $receiveTime
     */
    public function setReceiveTime(?int $receiveTime): void
    {
        $this->receiveTime = $receiveTime;
    }

    /**
     * @return int
     */
    public function getConfirmTime(): ?int
    {
        return $this->confirmTime;
    }

    /**
     * @param int $confirmTime
     */
    public function setConfirmTime(?int $confirmTime): void
    {
        $this->confirmTime = $confirmTime;
    }

    /**
     * @return int
     */
    public function getShipTime(): ?int
    {
        return $this->shipTime;
    }

    /**
     * @param int $shipTime
     */
    public function setShipTime(?int $shipTime): void
    {
        $this->shipTime = $shipTime;
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
    public function getPayTime(): ?int
    {
        return $this->payTime;
    }

    /**
     * @param int $payTime
     */
    public function setPayTime(?int $payTime): void
    {
        $this->payTime = $payTime;
    }

    /**
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * @param int $createTime
     */
    public function setCreateTime(?int $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return LogisticsDTO
     */
    public function getLogisticsDTO(): ?LogisticsDTO
    {
        return $this->logisticsDTO;
    }

    /**
     * @param LogisticsDTO $logisticsDTO
     */
    public function setLogisticsDTO(?LogisticsDTO $logisticsDTO): void
    {
        $this->logisticsDTO = $logisticsDTO;
    }

    /**
     * @return PromotionDTO
     */
    public function getPromotion(): ?PromotionDTO
    {
        return $this->promotion;
    }

    /**
     * @param PromotionDTO $promotion
     */
    public function setPromotion(?PromotionDTO $promotion): void
    {
        $this->promotion = $promotion;
    }

    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource(?string $source): void
    {
        $this->source = $source;
    }

    /**
     * @return int
     */
    public function getPhase(): ?int
    {
        return $this->phase;
    }

    /**
     * @param int $phase
     */
    public function setPhase(?int $phase): void
    {
        $this->phase = $phase;
    }

    /**
     * @return PriceDTO
     */
    public function getPriceDTO(): ?PriceDTO
    {
        return $this->priceDTO;
    }

    /**
     * @param PriceDTO $priceDTO
     */
    public function setPriceDTO(?PriceDTO $priceDTO): void
    {
        $this->priceDTO = $priceDTO;
    }

    /**
     * @return string
     */
    public function getConsumeStatus(): ?string
    {
        return $this->consumeStatus;
    }

    /**
     * @param string $consumeStatus
     */
    public function setConsumeStatus(?string $consumeStatus): void
    {
        $this->consumeStatus = $consumeStatus;
    }

    /**
     * @return int
     */
    public function getSalesModelType(): ?int
    {
        return $this->salesModelType;
    }

    /**
     * @param int $salesModelType
     */
    public function setSalesModelType(?int $salesModelType): void
    {
        $this->salesModelType = $salesModelType;
    }

    /**
     * @return int
     */
    public function getActivityType(): ?int
    {
        return $this->activityType;
    }

    /**
     * @param int $activityType
     */
    public function setActivityType(?int $activityType): void
    {
        $this->activityType = $activityType;
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
    public function getGoodsType(): ?int
    {
        return $this->goodsType;
    }

    /**
     * @param int $goodsType
     */
    public function setGoodsType(?int $goodsType): void
    {
        $this->goodsType = $goodsType;
    }

    /**
     * @return string
     */
    public function getOrderStatus(): ?string
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     */
    public function setOrderStatus(?string $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return string
     */
    public function getOrderType(): ?string
    {
        return $this->orderType;
    }

    /**
     * @param string $orderType
     */
    public function setOrderType(?string $orderType): void
    {
        $this->orderType = $orderType;
    }

    /**
     * @return string
     */
    public function getBizCategory(): ?string
    {
        return $this->bizCategory;
    }

    /**
     * @param string $bizCategory
     */
    public function setBizCategory(?string $bizCategory): void
    {
        $this->bizCategory = $bizCategory;
    }

    /**
     * @return SellerDTO
     */
    public function getSellerDTO(): ?SellerDTO
    {
        return $this->sellerDTO;
    }

    /**
     * @param SellerDTO $sellerDTO
     */
    public function setSellerDTO(?SellerDTO $sellerDTO): void
    {
        $this->sellerDTO = $sellerDTO;
    }

    /**
     * @return BuyerDTO
     */
    public function getBuyerDTO(): ?BuyerDTO
    {
        return $this->buyerDTO;
    }

    /**
     * @param BuyerDTO $buyerDTO
     */
    public function setBuyerDTO(?BuyerDTO $buyerDTO): void
    {
        $this->buyerDTO = $buyerDTO;
    }

    /**
     * @return string
     */
    public function getPayId(): ?string
    {
        return $this->payId;
    }

    /**
     * @param string $payId
     */
    public function setPayId(?string $payId): void
    {
        $this->payId = $payId;
    }

    /**
     * @return int
     */
    public function getContractId(): ?int
    {
        return $this->contractId;
    }

    /**
     * @param int $contractId
     */
    public function setContractId(?int $contractId): void
    {
        $this->contractId = $contractId;
    }

    /**
     * @return string
     */
    public function getChannelType(): ?string
    {
        return $this->channelType;
    }

    /**
     * @param string $channelType
     */
    public function setChannelType(?string $channelType): void
    {
        $this->channelType = $channelType;
    }

    /**
     * @return string
     */
    public function getOutBizNo(): ?string
    {
        return $this->outBizNo;
    }

    /**
     * @param string $outBizNo
     */
    public function setOutBizNo(?string $outBizNo): void
    {
        $this->outBizNo = $outBizNo;
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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}