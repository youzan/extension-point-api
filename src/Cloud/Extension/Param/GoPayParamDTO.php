<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\OrderDTO;

/**
 * 去支付扩展入参
 * @author Baymax
 * @create 2018-09-25 17:50:17.0
 */
class GoPayParamDTO implements \JsonSerializable {

    /**
     * 用户手机号
     * @var string
     */
    private $userPhone;

    /**
     * 粉丝类型
     * @var int
     */
    private $fansType;

    /**
     * 粉丝id
     * @var string
     */
    private $fansId;

    /**
     * 订单数据
     * @var OrderDTO
     */
    private $orderDTO;

    /**
     * 支付结果返回页面
     * @var string
     */
    private $payResultPage;

    /**
     * 付款总金额
     * @var int
     */
    private $payAmount;

    /**
     * 用户标识
     * @var string
     */
    private $userId;

    /**
     * 商户店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 用户标识
     * @var string
     */
    private $yzOpenId;



    /**
     * @return string
     */
    public function getUserPhone(): string
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     */
    public function setUserPhone(string $userPhone): void
    {
        $this->userPhone = $userPhone;
    }

    /**
     * @return int
     */
    public function getFansType(): int
    {
        return $this->fansType;
    }

    /**
     * @param int $fansType
     */
    public function setFansType(int $fansType): void
    {
        $this->fansType = $fansType;
    }

    /**
     * @return string
     */
    public function getFansId(): string
    {
        return $this->fansId;
    }

    /**
     * @param string $fansId
     */
    public function setFansId(string $fansId): void
    {
        $this->fansId = $fansId;
    }

    /**
     * @return OrderDTO
     */
    public function getOrderDTO(): OrderDTO
    {
        return $this->orderDTO;
    }

    /**
     * @param OrderDTO $orderDTO
     */
    public function setOrderDTO(OrderDTO $orderDTO): void
    {
        $this->orderDTO = $orderDTO;
    }

    /**
     * @return string
     */
    public function getPayResultPage(): string
    {
        return $this->payResultPage;
    }

    /**
     * @param string $payResultPage
     */
    public function setPayResultPage(string $payResultPage): void
    {
        $this->payResultPage = $payResultPage;
    }

    /**
     * @return int
     */
    public function getPayAmount(): int
    {
        return $this->payAmount;
    }

    /**
     * @param int $payAmount
     */
    public function setPayAmount(int $payAmount): void
    {
        $this->payAmount = $payAmount;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

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
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}