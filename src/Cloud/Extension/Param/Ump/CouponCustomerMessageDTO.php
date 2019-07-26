<?php

namespace Com\Youzan\Cloud\Extension\Param\Ump;



/**
 * 
 * @author Baymax
 * @create 2019-07-26 14:04:12.0
 */
class CouponCustomerMessageDTO implements \JsonSerializable {

    /**
     * 消息标识
     * @var string
     */
    private $id;

    /**
     * 店铺标识
     * @var int
     */
    private $kdt_id;

    /**
     * 店铺名称
     * @var string
     */
    private $kdt_name;

    /**
     * 字段名	类型	描述	示例 fans_id	int	用户粉丝id，优先级低于mobile，当 mobile 有值时，fans_id 为0	1000000 fans_type	int	用户粉丝类型，有值时为1（店铺绑定了认证服务号的自有粉丝），优先级低于mobile，当 mobile 有值时，fans_type 为0	1 mobile	string	用户手机号	13689627533 id	string	优惠券或优惠码ID，券或码的唯一标识	2023639 type	string	优惠事件类型	COUPON_CUSTOMER_PROMOTION status	string	优惠事件状态	CARD_TAKE event_time	String	事件发生时间	2017-06-20 10:48:08
     * @var string
     */
    private $msg;

    /**
     * 消息类型标识 用户端优惠券/码事件	status 值 领取优惠券	CARD_TAKE 核销优惠券	CARD_CONSUME 收回优惠券	CARD_BACK 领取优惠码	CODE_TAKE 核销优惠码	CODE_CONSUME 收回优惠码	CODE_BACK 买家退回优惠券	CARD_REVERT
     * @var string
     */
    private $status;



    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getKdt_id(): int
    {
        return $this->kdt_id;
    }

    /**
     * @param int $kdt_id
     */
    public function setKdt_id(int $kdt_id): void
    {
        $this->kdt_id = $kdt_id;
    }

    /**
     * @return string
     */
    public function getKdt_name(): string
    {
        return $this->kdt_name;
    }

    /**
     * @param string $kdt_name
     */
    public function setKdt_name(string $kdt_name): void
    {
        $this->kdt_name = $kdt_name;
    }

    /**
     * @return string
     */
    public function getMsg(): string
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     */
    public function setMsg(string $msg): void
    {
        $this->msg = $msg;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}