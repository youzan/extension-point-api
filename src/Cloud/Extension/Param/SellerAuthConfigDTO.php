<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create 2019-07-18 17:09:11.0
 */
class SellerAuthConfigDTO implements \JsonSerializable {

    /**
     * 鉴权信息
     * @var array
     */
    private $authKeys;



    /**
     * @return array
     */
    public function getAuthKeys(): array
    {
        return $this->authKeys;
    }

    /**
     * @param array $authKeys
     */
    public function setAuthKeys(array $authKeys): void
    {
        $this->authKeys = $authKeys;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}