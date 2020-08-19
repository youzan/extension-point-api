<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 外部权益
 * @author Baymax
 * @create Fri Nov 22 12:15:26 CST 2019
 */
class OuterRightsDTO implements \JsonSerializable {

    /**
     * 赠送权益名称（礼包选择页展示名称） 例如：赠送芒果蛋糕，此处值为 “芒果蛋糕”
     * @var string
     */
    private $rightsName;

    /**
     * 赠送权益数量 例如：赠送芒果蛋糕*2，此处值为 “2”
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