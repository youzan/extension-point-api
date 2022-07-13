<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 
 * @author Baymax
 * @create 2021-09-23 18:45:31.0
 */
class StockDeductResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $stockMode;

    /**
     * 
     * @var string
     */
    private $message;



    /**
     * @return int
     */
    public function getStockMode(): ?int
    {
        return $this->stockMode;
    }

    /**
     * @param int $stockMode
     */
    public function setStockMode(?int $stockMode): void
    {
        $this->stockMode = $stockMode;
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