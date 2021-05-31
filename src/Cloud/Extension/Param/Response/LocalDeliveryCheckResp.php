<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 
 * @author Baymax
 * @create 2021-05-25 10:09:40.0
 */
class LocalDeliveryCheckResp implements \JsonSerializable {

    /**
     * 校验是否通过
     * @var int
     */
    private $isCheckPass;

    /**
     * 校验不通过的提示文案
     * @var string
     */
    private $message;



    /**
     * @return int
     */
    public function getIsCheckPass(): ?int
    {
        return $this->isCheckPass;
    }

    /**
     * @param int $isCheckPass
     */
    public function setIsCheckPass(?int $isCheckPass): void
    {
        $this->isCheckPass = $isCheckPass;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}