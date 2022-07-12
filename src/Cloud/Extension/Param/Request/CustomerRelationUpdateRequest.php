<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 *  
 * @author Baymax
 * @create Fri Apr 22 14:24:14 CST 2022
 */
class CustomerRelationUpdateRequest implements \JsonSerializable {

    /**
     * 操作类型。1、换绑，2、失效
     * @var int
     */
    private $operatorType;

    /**
     * 客户有赞用户id
     * @var string
     */
    private $ctYzOpenId;

    /**
     * 导购有赞用户id 如果是失效场景，那么会将本次失效关系中的导购员传入
     * @var string
     */
    private $guideYzOpenId;

    /**
     * 失效原因枚举值:1、有效,2、跑路,3、客户关系合并,4、商家主动操作迁移客户关系,5、迁移至导购员专属,6、已关闭导购员自我绑定设置，导购与自己的专属关系失效,7、该客户已成为导购员，原专属关系自动解绑,11、清退导购员的同时，销售员和客户之间的关系也被取消了,12、销售员账号身份变更为导购，客户关系失效,13、商家手动解绑客户关系,50、专属关系有效期已结束,51、清退导购员，原专属关系自动解绑,61、导购降级为POS导购,62、导购停用,71、导购离职，关系重新分配
     * @var int
     */
    private $invalidReasonState;

    /**
     * 失效原因
     * @var string
     */
    private $invalidReason;

    /**
     * 客户来源渠道:-1、其他,0、浏览器,1、微信公众号,2、微博,9、有赞大账号,188、QQ,736、支付宝,1181、今日头条,16940、快手,6227、精选小程序,35188、爱逛小程序,1000000、微信小程序,1000001、企微助手
     * @var int
     */
    private $channel;

    /**
     * 绑定来源:4、查看导购员动态,5、查看导购员名片,6、浏览微页面,7、浏览招募计划,11、成为导购员,13、领取优惠券,14、其他,15、商家手动调整绑定,16、客户关系数据迁移,17、下单,18、会员注册,19、企微加好友绑定关系,20、企微导购成为商城导购关系调整,21、浏览商品详情页,22、邀请进企业微信群
     * @var int
     */
    private $guideBindSourceType;

    /**
     * 店铺id,当前店铺id，如果是店铺操作，则会传店铺id，如果是总部操作，则不需要传
     * @var int
     */
    private $kdtId;

    /**
     * 商家总部id，如果是单店则是单店店铺id
     * @var int
     */
    private $rootKdtId;



    /**
     * @return int
     */
    public function getOperatorType(): ?int
    {
        return $this->operatorType;
    }

    /**
     * @param int $operatorType
     */
    public function setOperatorType(?int $operatorType): void
    {
        $this->operatorType = $operatorType;
    }

    /**
     * @return string
     */
    public function getCtYzOpenId(): ?string
    {
        return $this->ctYzOpenId;
    }

    /**
     * @param string $ctYzOpenId
     */
    public function setCtYzOpenId(?string $ctYzOpenId): void
    {
        $this->ctYzOpenId = $ctYzOpenId;
    }

    /**
     * @return string
     */
    public function getGuideYzOpenId(): ?string
    {
        return $this->guideYzOpenId;
    }

    /**
     * @param string $guideYzOpenId
     */
    public function setGuideYzOpenId(?string $guideYzOpenId): void
    {
        $this->guideYzOpenId = $guideYzOpenId;
    }

    /**
     * @return int
     */
    public function getInvalidReasonState(): ?int
    {
        return $this->invalidReasonState;
    }

    /**
     * @param int $invalidReasonState
     */
    public function setInvalidReasonState(?int $invalidReasonState): void
    {
        $this->invalidReasonState = $invalidReasonState;
    }

    /**
     * @return string
     */
    public function getInvalidReason(): ?string
    {
        return $this->invalidReason;
    }

    /**
     * @param string $invalidReason
     */
    public function setInvalidReason(?string $invalidReason): void
    {
        $this->invalidReason = $invalidReason;
    }

    /**
     * @return int
     */
    public function getChannel(): ?int
    {
        return $this->channel;
    }

    /**
     * @param int $channel
     */
    public function setChannel(?int $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return int
     */
    public function getGuideBindSourceType(): ?int
    {
        return $this->guideBindSourceType;
    }

    /**
     * @param int $guideBindSourceType
     */
    public function setGuideBindSourceType(?int $guideBindSourceType): void
    {
        $this->guideBindSourceType = $guideBindSourceType;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}