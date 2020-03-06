<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;

/**
 * 
 * @author Baymax
 * @create Thu Aug 01 11:46:51 CST 2019
 */
class ExtPromotionCoreResultDTO implements \JsonSerializable {

    /**
     * 优惠原因
     * @var string
     */
    private $reason;

    /**
     * 优惠金额
     * @var int
     */
    private $decrease;

    /**
     * 
     * @var stdClass
     */
    private $extension;



    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @return int
     */
    public function getDecrease(): int
    {
        return $this->decrease;
    }

    /**
     * @param int $decrease
     */
    public function setDecrease(int $decrease): void
    {
        $this->decrease = $decrease;
    }

    /**
     * @return stdClass
     */
    public function getExtension(): stdClass
    {
        return $this->extension;
    }

    /**
     * @param stdClass $extension
     */
    public function setExtension(stdClass $extension): void
    {
        $this->extension = $extension;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}