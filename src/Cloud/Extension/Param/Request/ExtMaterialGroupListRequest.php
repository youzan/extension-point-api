<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 请求参数
 * @author Baymax
 * @create Tue May 13 17:29:07 CST 2025
 */
class ExtMaterialGroupListRequest implements \JsonSerializable {

    /**
     * 父分组id，传0表示根节点
     * @var int
     */
    private $parentGroupId;

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
     * 素材分组名称搜索关键词
     * @var string
     */
    private $keyword;



    /**
     * @return int
     */
    public function getParentGroupId(): ?int
    {
        return $this->parentGroupId;
    }

    /**
     * @param int $parentGroupId
     */
    public function setParentGroupId(?int $parentGroupId): void
    {
        $this->parentGroupId = $parentGroupId;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}