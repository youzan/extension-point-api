<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\OrderDTO;

/**
 * 去支付扩展入参
 * @author Baymax
 * @create Thu Jan 13 20:59:39 CST 2022
 */
class GoPayParamDTO implements \JsonSerializable {

    /**
     * 用户手机号
     * @var string
     */
    private $userPhone;

    /**
     * fans_type：1:代表微信自有粉丝；2：代表[微博平台]产生的粉丝；9：代表粉丝类型为微信大账号粉丝；188：代表[qq平台]产生的粉丝；736:代表[支付宝平台]产生的粉丝；1181:代表[今日头条]产生的粉丝；非上述fans_type其他：代表其他平台或小程序粉丝或者三方sdk产生的粉丝；
     * @var int
     */
    private $fansType;

    /**
     * 有赞不同的合作渠道会生成不同渠道对应在有赞平台下的fans_id。fans_id和fans_type组成一个唯一的有赞用户标识。从浏览器过来的下单的是拿不到fans_id。 大账号fans_id：通过微信去访问有赞店铺的商品等，系统会给用户生成fansid。 用户自有fans_id（从三方过来的）：关注任意一个公众号(包括有赞大账号)后生成ID。
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
     * 订单实付金额
     * @var int
     */
    private $payAmount;

    /**
     * 有赞用户ID，在有赞平台账号平台下唯一
     * @var string
     */
    private $userId;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;

    /**
     * 有赞用户id，用户在有赞的唯一id。推荐使用
     * @var string
     */
    private $yzOpenId;



    /**
     * @return string
     */
    public function getUserPhone(): ?string
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     */
    public function setUserPhone(?string $userPhone): void
    {
        $this->userPhone = $userPhone;
    }

    /**
     * @return int
     */
    public function getFansType(): ?int
    {
        return $this->fansType;
    }

    /**
     * @param int $fansType
     */
    public function setFansType(?int $fansType): void
    {
        $this->fansType = $fansType;
    }

    /**
     * @return string
     */
    public function getFansId(): ?string
    {
        return $this->fansId;
    }

    /**
     * @param string $fansId
     */
    public function setFansId(?string $fansId): void
    {
        $this->fansId = $fansId;
    }

    /**
     * @return OrderDTO
     */
    public function getOrderDTO(): ?OrderDTO
    {
        return $this->orderDTO;
    }

    /**
     * @param OrderDTO $orderDTO
     */
    public function setOrderDTO(?OrderDTO $orderDTO): void
    {
        $this->orderDTO = $orderDTO;
    }

    /**
     * @return string
     */
    public function getPayResultPage(): ?string
    {
        return $this->payResultPage;
    }

    /**
     * @param string $payResultPage
     */
    public function setPayResultPage(?string $payResultPage): void
    {
        $this->payResultPage = $payResultPage;
    }

    /**
     * @return int
     */
    public function getPayAmount(): ?int
    {
        return $this->payAmount;
    }

    /**
     * @param int $payAmount
     */
    public function setPayAmount(?int $payAmount): void
    {
        $this->payAmount = $payAmount;
    }

    /**
     * @return string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(?string $userId): void
    {
        $this->userId = $userId;
    }

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
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}