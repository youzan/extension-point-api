<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\UserDTO;
use Com\Youzan\Cloud\Extension\Param\Model\GoodsDTO;

/**
 * 请求参数
 * @author Baymax
 * @create Tue Jun 17 20:15:33 CST 2025
 */
class PointDeductionPromotionRequestDTO implements \JsonSerializable {

    /**
     * 下单店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 总部店铺id
     * @var int
     */
    private $rootKdtId;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 经过有赞营销计算后的邮费，单位：分
     * @var int
     */
    private $postage;

    /**
     * 经过有赞营销计算后的订单总金额，单位：分
     * @var int
     */
    private $orderTotalPay;

    /**
     * 用户信息
     * @var UserDTO
     */
    private $buyer;

    /**
     * 商品信息
     * @var array
     */
    private $goodsDTOList;

    /**
     * 用户当前总积分数
     * @var int
     */
    private $userPoints;

    /**
     * 用户自主选择使用积分数
     * @var int
     */
    private $usePoints;



    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getPostage(): ?int
    {
        return $this->postage;
    }

    /**
     * @param int $postage
     */
    public function setPostage(?int $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return int
     */
    public function getOrderTotalPay(): ?int
    {
        return $this->orderTotalPay;
    }

    /**
     * @param int $orderTotalPay
     */
    public function setOrderTotalPay(?int $orderTotalPay): void
    {
        $this->orderTotalPay = $orderTotalPay;
    }

    /**
     * @return UserDTO
     */
    public function getBuyer(): ?UserDTO
    {
        return $this->buyer;
    }

    /**
     * @param UserDTO $buyer
     */
    public function setBuyer(?UserDTO $buyer): void
    {
        $this->buyer = $buyer;
    }

    /**
     * @return array
     */
    public function getGoodsDTOList(): ?array
    {
        return $this->goodsDTOList;
    }

    /**
     * @param array $goodsDTOList
     */
    public function setGoodsDTOList(?array $goodsDTOList): void
    {
        $this->goodsDTOList = $goodsDTOList;
    }

    /**
     * @return int
     */
    public function getUserPoints(): ?int
    {
        return $this->userPoints;
    }

    /**
     * @param int $userPoints
     */
    public function setUserPoints(?int $userPoints): void
    {
        $this->userPoints = $userPoints;
    }

    /**
     * @return int
     */
    public function getUsePoints(): ?int
    {
        return $this->usePoints;
    }

    /**
     * @param int $usePoints
     */
    public function setUsePoints(?int $usePoints): void
    {
        $this->usePoints = $usePoints;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}