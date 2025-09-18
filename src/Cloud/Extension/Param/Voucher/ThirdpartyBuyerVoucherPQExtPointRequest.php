<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;


use StdClass;

/**
 *  
 * @author Baymax
 * @create Fri Sep 05 15:20:16 CST 2025
 */
class ThirdpartyBuyerVoucherPQExtPointRequest implements \JsonSerializable {

    /**
     * 店铺kdtId
     * @var int
     */
    private $kdtId;

    /**
     * 用户id
     * @var string
     */
    private $yzOpenId;

    /**
     * 外部券活动id列表
     * @var array
     */
    private $activityIds;

    /**
     * 优惠券查询状态： 0. 全部 1. 未使用 and 未过期 2. 已使用 or 已过期
     * @var int
     */
    private $searchStatus;

    /**
     * 优惠券查询状态： 0. 全部 1. 未使用 and 未过期 2. 已使用  3. 已过期  4.已失效(已使用 or 已过期) 。  该字段为新状态字段，枚举更准确，后续接入方推荐使用这个
     * @var int
     */
    private $searchStatusV2;

    /**
     * 页码
     * @var int
     */
    private $pageNum;

    /**
     * 每页大小
     * @var int
     */
    private $pageSize;

    /**
     * 扩展点版本号
     * @var int
     */
    private $versionNo;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extMap;

    /**
     * 总部店铺Id，若为单店则该值为当前店铺Id
     * @var int
     */
    private $rootKdtId;



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
    public function getSearchStatus(): ?int
    {
        return $this->searchStatus;
    }

    /**
     * @param int $searchStatus
     */
    public function setSearchStatus(?int $searchStatus): void
    {
        $this->searchStatus = $searchStatus;
    }

    /**
     * @return int
     */
    public function getSearchStatusV2(): ?int
    {
        return $this->searchStatusV2;
    }

    /**
     * @param int $searchStatusV2
     */
    public function setSearchStatusV2(?int $searchStatusV2): void
    {
        $this->searchStatusV2 = $searchStatusV2;
    }

    /**
     * @return int
     */
    public function getPageNum(): ?int
    {
        return $this->pageNum;
    }

    /**
     * @param int $pageNum
     */
    public function setPageNum(?int $pageNum): void
    {
        $this->pageNum = $pageNum;
    }

    /**
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize(?int $pageSize): void
    {
        $this->pageSize = $pageSize;
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