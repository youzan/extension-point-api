<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 绑定专属关系扩展信息
 * @author Baymax
 * @create Mon Jun 19 09:44:43 CST 2023
 */
class RelationExtPointCanBindRelationExt implements \JsonSerializable {

    /**
     * 专属关系类型:交易下单:17,推广商品:21,商家后台操作:10101,储值充值:25,礼品卡购买:26,注册会员:18,企微加好友:19,店长分配:27,系统分配:28,分配给企微好友:29
     * @var int
     */
    private $bindSourceType;

    /**
     * 业务单号，当bindSourceType&#x3D;17时是交易单号
     * @var string
     */
    private $bizNo;



    /**
     * @return int
     */
    public function getBindSourceType(): ?int
    {
        return $this->bindSourceType;
    }

    /**
     * @param int $bindSourceType
     */
    public function setBindSourceType(?int $bindSourceType): void
    {
        $this->bindSourceType = $bindSourceType;
    }

    /**
     * @return string
     */
    public function getBizNo(): ?string
    {
        return $this->bizNo;
    }

    /**
     * @param string $bizNo
     */
    public function setBizNo(?string $bizNo): void
    {
        $this->bizNo = $bizNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}