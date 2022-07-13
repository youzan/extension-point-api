<?php

namespace Com\Youzan\Cloud\Extension\Param\Customer;



/**
 * 扩展点调用返回实体
 * @author Baymax
 * @create Mon Mar 14 16:52:05 CST 2022
 */
class ExtCustomerRelationBindResponseDTO implements \JsonSerializable {

    /**
     * 是否允许绑定，true:允许；false:不允许。允许绑定只是商家允许绑定的结果，但是不一定能够绑定上客户关系
     * @var bool
     */
    private $allowBind;



    /**
     * @return bool
     */
    public function getAllowBind(): ?bool
    {
        return $this->allowBind;
    }

    /**
     * @param bool $allowBind
     */
    public function setAllowBind(?bool $allowBind): void
    {
        $this->allowBind = $allowBind;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}