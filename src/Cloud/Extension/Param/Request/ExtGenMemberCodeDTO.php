<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2020-08-25 15:40:11.0
 */
class ExtGenMemberCodeDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 用户id
     * @var string
     */
    private $yzOpenId;



    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}