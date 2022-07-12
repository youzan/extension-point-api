<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 *  
 * @author Baymax
 * @create Mon Mar 14 16:59:06 CST 2022
 */
class GoodsNoCheckOpenModel implements \JsonSerializable {

    /**
     * 校验是否通过
     * @var bool
     */
    private $IsPassed;

    /**
     *  
     * @var string
     */
    private $message;

    /**
     *  
     * @var int
     */
    private $code;



    /**
     * @return bool
     */
    public function getIsPassed(): ?bool
    {
        return $this->IsPassed;
    }

    /**
     * @param bool $IsPassed
     */
    public function setIsPassed(?bool $IsPassed): void
    {
        $this->IsPassed = $IsPassed;
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

    /**
     * @return int
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(?int $code): void
    {
        $this->code = $code;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}