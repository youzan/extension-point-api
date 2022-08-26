<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\VoucherVerifyExtPointRequest\ThirdVoucherIdentity;

/**
 * 请求
 * @author Baymax
 * @create Tue Aug 23 19:33:38 CST 2022
 */
class VoucherVerifyExtPointRequest implements \JsonSerializable {

    /**
     * 三方券id
     * @var int
     */
    private $id;

    /**
     * 买家(下单用户)
     * @var string
     */
    private $yzOpenId;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单号来源 订单号+订单来源唯一确定一个买家订单
     * @var string
     */
    private $orderSource;

    /**
     * 扩展点版本号
     * @var int
     */
    private $versionNo;

    /**
     * 扩展字段，存放订单信息 订单总金额(原价):total_original_price 订单实付金额(券前置优惠后总价):total_promotional_price 订单项列表:order_items(数组) 具体订单项目order_item： 商品id:goods_id 商品skuId:sku_id 商品原价:goods_original_price 商品数量:num 订单项总金额:total_original_price 订单项实付总金额(前置优惠后订单项总价):total_promotional_price
     * @var stdClass
     */
    private $extMap;

    /**
     * 当前店铺Id
     * @var int
     */
    private $kdtId;

    /**
     * 总部店铺Id，若为单店，则该值为当前店铺Id
     * @var int
     */
    private $rootKdtId;

    /**
     * 优惠券核销码
     * @var string
     */
    private $verifyCode;

    /**
     * 优惠券优惠的实际金额;单位:分
     * @var int
     */
    private $preferentialValue;

    /**
     * 请求id
     * @var string
     */
    private $requestId;

    /**
     * 三方券列表
     * @var array
     */
    private $thirdVoucherIdentities;



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
    public function getOrderSource(): ?string
    {
        return $this->orderSource;
    }

    /**
     * @param string $orderSource
     */
    public function setOrderSource(?string $orderSource): void
    {
        $this->orderSource = $orderSource;
    }

    /**
     * @return int
     */
    public function getVersionNo(): ?int
    {
        return $this->versionNo;
    }

    /**
     * @param int $versionNo
     */
    public function setVersionNo(?int $versionNo): void
    {
        $this->versionNo = $versionNo;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): ?stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(?stdClass $extMap): void
    {
        $this->extMap = $extMap;
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
    public function getVerifyCode(): ?string
    {
        return $this->verifyCode;
    }

    /**
     * @param string $verifyCode
     */
    public function setVerifyCode(?string $verifyCode): void
    {
        $this->verifyCode = $verifyCode;
    }

    /**
     * @return int
     */
    public function getPreferentialValue(): ?int
    {
        return $this->preferentialValue;
    }

    /**
     * @param int $preferentialValue
     */
    public function setPreferentialValue(?int $preferentialValue): void
    {
        $this->preferentialValue = $preferentialValue;
    }

    /**
     * @return string
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * @return array
     */
    public function getThirdVoucherIdentities(): ?array
    {
        return $this->thirdVoucherIdentities;
    }

    /**
     * @param array $thirdVoucherIdentities
     */
    public function setThirdVoucherIdentities(?array $thirdVoucherIdentities): void
    {
        $this->thirdVoucherIdentities = $thirdVoucherIdentities;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}