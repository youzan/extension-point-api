<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-09-12 17:16:44.0
 */
class NoPaginatorParamDTO implements \JsonSerializable {

    /**
     * 鉴权信息
     * @var stdClass
     */
    private $authMap;



    /**
     * @return stdClass
     */
    public function getAuthMap(): stdClass
    {
        return $this->authMap;
    }

    /**
     * @param stdClass $authMap
     */
    public function setAuthMap(stdClass $authMap): void
    {
        $this->authMap = $authMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}