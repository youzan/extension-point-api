<?php

namespace Com\Youzan\Cloud\Extension\Param\Introduction;


use Com\Youzan\Cloud\Extension\Param\Introduction\ItemProValueParam;

/**
 * 商品类目、商品参数
 * @author Baymax
 * @create Tue Apr 04 17:41:46 CST 2023
 */
class ItemCateProParam implements \JsonSerializable {

    /**
     * 新类目ID叶子类目
     * @var int
     */
    private $leafCategoryId;

    /**
     *  渠道
     * @var int
     */
    private $channel;

    /**
     * 类目状态1：正常2：禁用
     * @var int
     */
    private $status;

    /**
     * 全类目路径
     * @var array
     */
    private $fullCategoryNames;

    /**
     * 公域属性
     * @var array
     */
    private $publicProParams;

    /**
     * 私域属性
     * @var array
     */
    private $privateProParams;



    /**
     * @return int
     */
    public function getLeafCategoryId(): ?int
    {
        return $this->leafCategoryId;
    }

    /**
     * @param int $leafCategoryId
     */
    public function setLeafCategoryId(?int $leafCategoryId): void
    {
        $this->leafCategoryId = $leafCategoryId;
    }

    /**
     * @return int
     */
    public function getChannel(): ?int
    {
        return $this->channel;
    }

    /**
     * @param int $channel
     */
    public function setChannel(?int $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return array
     */
    public function getFullCategoryNames(): ?array
    {
        return $this->fullCategoryNames;
    }

    /**
     * @param array $fullCategoryNames
     */
    public function setFullCategoryNames(?array $fullCategoryNames): void
    {
        $this->fullCategoryNames = $fullCategoryNames;
    }

    /**
     * @return array
     */
    public function getPublicProParams(): ?array
    {
        return $this->publicProParams;
    }

    /**
     * @param array $publicProParams
     */
    public function setPublicProParams(?array $publicProParams): void
    {
        $this->publicProParams = $publicProParams;
    }

    /**
     * @return array
     */
    public function getPrivateProParams(): ?array
    {
        return $this->privateProParams;
    }

    /**
     * @param array $privateProParams
     */
    public function setPrivateProParams(?array $privateProParams): void
    {
        $this->privateProParams = $privateProParams;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}