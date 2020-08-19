<?php

namespace Com\Youzan\Cloud\Extension\Param\Giftpack;



/**
 * 外部权益列表
 * @author Baymax
 * @create Tue Mar 24 10:56:53 CST 2020
 */
class OuterRightsDTO implements \JsonSerializable {

    /**
     * 外部权益名称
     * @var string
     */
    private $rightsName;

    /**
     * 外部权益数量
     * @var int
     */
    private $count;



    /**
     * @return string
     */
    public function getRightsName(): string
    {
        return $this->rightsName;
    }

    /**
     * @param string $rightsName
     */
    public function setRightsName(string $rightsName): void
    {
        $this->rightsName = $rightsName;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}