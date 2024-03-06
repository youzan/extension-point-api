<?php

namespace Com\Youzan\Cloud\Extension\Param\AccessControlReq;



/**
 * sessionId对象
 * @author Baymax
 * @create Tue Sep 12 16:11:15 CST 2023
 */
class SessionId implements \JsonSerializable {

    /**
     * sessionId
     * @var string
     */
    private $value;

    /**
     * 业务类型，C端为null
     * @var string
     */
    private $bizType;



    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getBizType(): ?string
    {
        return $this->bizType;
    }

    /**
     * @param string $bizType
     */
    public function setBizType(?string $bizType): void
    {
        $this->bizType = $bizType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}