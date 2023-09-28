<?php

namespace Com\Youzan\Cloud\Extension\Param\Customer;



/**
 *  请求参数
 * @author Baymax
 * @create Thu Aug 24 18:49:08 CST 2023
 */
class ExtCustomerTagListRequest implements \JsonSerializable {

    /**
     * 有赞导购id，导购在有赞的唯一id。
     * @var string
     */
    private $guideYzOpenId;

    /**
     * 页码，从1开始
     * @var int
     */
    private $page;

    /**
     * 单页查询数据量，范围1-50
     * @var int
     */
    private $pageSize;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺。
     * @var int
     */
    private $kdtId;

    /**
     * 有赞连锁总部店铺id，仅供有赞连锁场景下使用。有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个总部
     * @var int
     */
    private $rootKdtId;



    /**
     * @return string
     */
    public function getGuideYzOpenId(): ?string
    {
        return $this->guideYzOpenId;
    }

    /**
     * @param string $guideYzOpenId
     */
    public function setGuideYzOpenId(?string $guideYzOpenId): void
    {
        $this->guideYzOpenId = $guideYzOpenId;
    }

    /**
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(?int $page): void
    {
        $this->page = $page;
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