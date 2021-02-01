<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 积分权益
 * @author Baymax
 * @create 2019-11-22 12:15:26.0
 */
class PointRightsDTO implements \JsonSerializable {

    /**
     * 积分值
     * @var int
     */
    private $point;

    /**
     * 自定义积分名称
     * @var string
     */
    private $customPointName;



    /**
     * @return int
     */
    public function getPoint(): ?int
    {
        return $this->point;
    }

    /**
     * @param int $point
     */
    public function setPoint(?int $point): void
    {
        $this->point = $point;
    }

    /**
     * @return string
     */
    public function getCustomPointName(): ?string
    {
        return $this->customPointName;
    }

    /**
     * @param string $customPointName
     */
    public function setCustomPointName(?string $customPointName): void
    {
        $this->customPointName = $customPointName;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}