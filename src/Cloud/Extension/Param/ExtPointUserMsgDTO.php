<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 买家信息
 * @author Baymax
 * @create Wed Feb 23 17:15:19 CST 2022
 */
class ExtPointUserMsgDTO implements \JsonSerializable {

    /**
     * 客户Id（有赞用户ID，在有赞平台账号平台下唯一）
     * @var int
     */
    private $buyerId;

    /**
     * fans_type：1:代表微信自有粉丝；2：代表[微博平台]产生的粉丝；9：代表粉丝类型为微信大账号粉丝；188：代表[qq平台]产生的粉丝；736:代表[支付宝平台]产生的粉丝；1181:代表[今日头条]产生的粉丝；非上述fans_type其他：代表其他平台或小程序粉丝或者三方sdk产生的粉丝；
     * @var int
     */
    private $fansType;

    /**
     * 有赞不同的合作渠道会生成不同渠道对应在有赞平台下的fans_id。fans_id和fans_type组成一个唯一的有赞用户标识。从浏览器过来的下单的是拿不到fans_id。 大账号fans_id：通过微信去访问有赞店铺的商品等，系统会给用户生成fansid。 用户自有fans_id（从三方过来的）：关注任意一个公众号(包括有赞大账号)后生成ID。
     * @var int
     */
    private $fansId;

    /**
     * 客户ip
     * @var string
     */
    private $clientIp;

    /**
     * 外部用户id
     * @var string
     */
    private $outUserId;

    /**
     * 手机号
     * @var string
     */
    private $phoneNo;

    /**
     * 有赞用户id，用户在有赞的唯一id。推荐使用
     * @var string
     */
    private $yzOpenId;



    /**
     * @return int
     */
    public function getBuyerId(): ?int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(?int $buyerId): void
    {
        $this->buyerId = $buyerId;
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
     * @return int
     */
    public function getFansId(): ?int
    {
        return $this->fansId;
    }

    /**
     * @param int $fansId
     */
    public function setFansId(?int $fansId): void
    {
        $this->fansId = $fansId;
    }

    /**
     * @return string
     */
    public function getClientIp(): ?string
    {
        return $this->clientIp;
    }

    /**
     * @param string $clientIp
     */
    public function setClientIp(?string $clientIp): void
    {
        $this->clientIp = $clientIp;
    }

    /**
     * @return string
     */
    public function getOutUserId(): ?string
    {
        return $this->outUserId;
    }

    /**
     * @param string $outUserId
     */
    public function setOutUserId(?string $outUserId): void
    {
        $this->outUserId = $outUserId;
    }

    /**
     * @return string
     */
    public function getPhoneNo(): ?string
    {
        return $this->phoneNo;
    }

    /**
     * @param string $phoneNo
     */
    public function setPhoneNo(?string $phoneNo): void
    {
        $this->phoneNo = $phoneNo;
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