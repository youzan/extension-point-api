<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 请求参数
 * @author Baymax
 * @create Tue May 20 19:40:16 CST 2025
 */
class ExtMaterialListPagedRequest implements \JsonSerializable {

    /**
     * 素材搜索关键词
     * @var string
     */
    private $keyword;

    /**
     * 素材分组id列表，通过扩展点com.youzan.cloud.extension.api.guide.MaterialGroupListExtPoint获取分组id
     * @var array
     */
    private $materialGroupIdList;

    /**
     * 素材类型，0：图片，1：视频，2：微页面，3：店铺笔记
     * @var array
     */
    private $materialTypes;

    /**
     * 页码，从1开始
     * @var int
     */
    private $page;

    /**
     * 单页查询数据量，范围1-20
     * @var int
     */
    private $pageSize;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
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
    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword(?string $keyword): void
    {
        $this->keyword = $keyword;
    }

    /**
     * @return array
     */
    public function getMaterialGroupIdList(): ?array
    {
        return $this->materialGroupIdList;
    }

    /**
     * @param array $materialGroupIdList
     */
    public function setMaterialGroupIdList(?array $materialGroupIdList): void
    {
        $this->materialGroupIdList = $materialGroupIdList;
    }

    /**
     * @return array
     */
    public function getMaterialTypes(): ?array
    {
        return $this->materialTypes;
    }

    /**
     * @param array $materialTypes
     */
    public function setMaterialTypes(?array $materialTypes): void
    {
        $this->materialTypes = $materialTypes;
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