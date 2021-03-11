<?php

namespace Com\Youzan\Cloud\Extension\Param\Req;



/**
 * 请求入参
 * @author Baymax
 * @create 2021-01-05 17:51:36.0
 */
class RedirectUrlExtReqDTO implements \JsonSerializable {

    /**
     * 有赞订单号，E开头+年月日时分秒+随机数，长度24位字母和数字组合
     * @var string
     */
    private $orderNo;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;

    /**
     * 订单类型，0:普通订单；2:代付；1:送礼订单；3:分销采购单；4:赠品；5:心愿单；6:二维码订单；61:线下收银台订单；7:合并付货款；8:1分钱实名认证；9:品鉴；15:返利；51:全员开店；52:保证金；100:批发；10:拼团；35:酒店；40:外卖；41:堂食点餐；46:外卖买单；71:美业预约单；72:美业服务单；75:知识付费；81:礼品卡；85:直播带货订单；89:样品订单
     * @var int
     */
    private $orderType;

    /**
     * 支付工具，0:老的方式,支付方式与支付渠道组合在一起；1:无需支付；2:现付；3:部分支付；4:货到付款；5:线下收银；6:单次支付；7:阶段支付；8:外部支付
     * @var int
     */
    private $payWay;



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
    public function getOrderType(): ?int
    {
        return $this->orderType;
    }

    /**
     * @param int $orderType
     */
    public function setOrderType(?int $orderType): void
    {
        $this->orderType = $orderType;
    }

    /**
     * @return int
     */
    public function getPayWay(): ?int
    {
        return $this->payWay;
    }

    /**
     * @param int $payWay
     */
    public function setPayWay(?int $payWay): void
    {
        $this->payWay = $payWay;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}