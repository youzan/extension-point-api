<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\ExtBatchGetGoodsCommissionRequest\GuideInfo;


/**
 * 导购批量获取商品佣金请求
 * @author Baymax
 * @create Mon Jun 06 14:04:49 CST 2022
 */
class ExtBatchGetGoodsCommissionRequest implements \JsonSerializable {

    /**
     * 导购员信息
     * @var GuideInfo
     */
    private $guideInfo;

    /**
     * 店铺商品ID列表
     * @var array
     */
    private $goodIds;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 总店ID
     * @var int
     */
    private $rootKdtId;



    /**
     * @return GuideInfo
     */
    public function getGuideInfo(): ?GuideInfo
    {
        return $this->guideInfo;
    }

    /**
     * @param GuideInfo $guideInfo
     */
    public function setGuideInfo(?GuideInfo $guideInfo): void
    {
        $this->guideInfo = $guideInfo;
    }

    /**
     * @return array
     */
    public function getGoodIds(): ?array
    {
        return $this->goodIds;
    }

    /**
     * @param array $goodIds
     */
    public function setGoodIds(?array $goodIds): void
    {
        $this->goodIds = $goodIds;
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