<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use Java\Lang\Long;
use StdClass;

/**
 * 请求
 * @author Baymax
 * @create Mon Mar 14 19:24:32 CST 2022
 */
class AvailableVouchersQueryExtPointRequest implements \JsonSerializable {

    /**
     * 券归属人id
     * @var string
     */
    private $yzOpenId;

    /**
     * 外部券活动id列表
     * @var array
     */
    private $activityIds;

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
     * @return array
     */
    public function getActivityIds(): ?array
    {
        return $this->activityIds;
    }

    /**
     * @param array $activityIds
     */
    public function setActivityIds(?array $activityIds): void
    {
        $this->activityIds = $activityIds;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}