<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\UserDTO;
use Com\Youzan\Cloud\Extension\Param\Model\GoodsDTO;

/**
 * 
 * @author Baymax
 * @create 2020-04-27 17:33:11.0
 */
class PointDeductionPromotionRequestDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $kdtId;

    /**
     * 
     * @var string
     */
    private $orderNo;

    /**
     * 
     * @var int
     */
    private $postage;

    /**
     * 
     * @var int
     */
    private $orderTotalPay;

    /**
     * 
     * @var UserDTO
     */
    private $buyer;

    /**
     * 
     * @var array
     */
    private $goodsDTOList;

    /**
     * 
     * @var int
     */
    private $userPoints;

    /**
     * 
     * @var int
     */
    private $usePoints;



    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getPostage(): int
    {
        return $this->postage;
    }

    /**
     * @param int $postage
     */
    public function setPostage(int $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return int
     */
    public function getOrderTotalPay(): int
    {
        return $this->orderTotalPay;
    }

    /**
     * @param int $orderTotalPay
     */
    public function setOrderTotalPay(int $orderTotalPay): void
    {
        $this->orderTotalPay = $orderTotalPay;
    }

    /**
     * @return UserDTO
     */
    public function getBuyer(): UserDTO
    {
        return $this->buyer;
    }

    /**
     * @param UserDTO $buyer
     */
    public function setBuyer(UserDTO $buyer): void
    {
        $this->buyer = $buyer;
    }

    /**
     * @return array
     */
    public function getGoodsDTOList(): array
    {
        return $this->goodsDTOList;
    }

    /**
     * @param array $goodsDTOList
     */
    public function setGoodsDTOList(array $goodsDTOList): void
    {
        $this->goodsDTOList = $goodsDTOList;
    }

    /**
     * @return int
     */
    public function getUserPoints(): int
    {
        return $this->userPoints;
    }

    /**
     * @param int $userPoints
     */
    public function setUserPoints(int $userPoints): void
    {
        $this->userPoints = $userPoints;
    }

    /**
     * @return int
     */
    public function getUsePoints(): int
    {
        return $this->usePoints;
    }

    /**
     * @param int $usePoints
     */
    public function setUsePoints(int $usePoints): void
    {
        $this->usePoints = $usePoints;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}