<?php

namespace Com\Youzan\Cloud\Extension\Param\Plugin;



/**
 * 送积分权益
 * @author Baymax
 * @create 2020-03-10 15:44:13.0
 */
class ExtTemplatePointsDTO implements \JsonSerializable {

    /**
     * 送积分数
     * @var int
     */
    private $points;



    /**
     * @return int
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * @param int $points
     */
    public function setPoints(int $points): void
    {
        $this->points = $points;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}