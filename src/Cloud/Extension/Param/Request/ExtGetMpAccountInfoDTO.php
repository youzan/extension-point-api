<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 *  
 * @author Baymax
 * @create Thu Jan 13 22:16:38 CST 2022
 */
class ExtGetMpAccountInfoDTO implements \JsonSerializable {

    /**
     * 扩展点店铺id
     * @var int
     */
    private $kdtId;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}