<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Dto\CardProductBaseInfoDTO;

/**
 *  
 * @author Baymax
 * @create Mon Mar 14 19:11:44 CST 2022
 */
class ValueCardBuyCenterResponse implements \JsonSerializable {

    /**
     *  
     * @var array
     */
    private $cardProductBaseInfoDTOList;

    /**
     * 数据总条数
     * @var int
     */
    private $total;



    /**
     * @return array
     */
    public function getCardProductBaseInfoDTOList(): ?array
    {
        return $this->cardProductBaseInfoDTOList;
    }

    /**
     * @param array $cardProductBaseInfoDTOList
     */
    public function setCardProductBaseInfoDTOList(?array $cardProductBaseInfoDTOList): void
    {
        $this->cardProductBaseInfoDTOList = $cardProductBaseInfoDTOList;
    }

    /**
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}