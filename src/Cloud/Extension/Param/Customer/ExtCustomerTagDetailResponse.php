<?php

namespace Com\Youzan\Cloud\Extension\Param\Customer;

use Com\Youzan\Cloud\Extension\Param\ExtCustomerTagDetailResponse\ExtCustomerTagDetail;

/**
 * 结果数据
 * @author Baymax
 * @create Thu Aug 24 18:49:00 CST 2023
 */
class ExtCustomerTagDetailResponse implements \JsonSerializable {

    /**
     * 客户标签列表
     * @var array
     */
    private $tags;



    /**
     * @return array
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}