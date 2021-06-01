<?php

namespace Com\Youzan\Cloud\Extension\Param\Im;



/**
 * 
 * @author Baymax
 * @create 2019-10-08 18:23:13.0
 */
class RobotMsgRequest implements \JsonSerializable {

    /**
     * 用户咨询的消息内容
     * @var string
     */
    private $content;

    /**
     * 消息类型，文本：text，图片：image，当消息类型为image时，content的内容为图片链接
     * @var string
     */
    private $msgType;

    /**
     * 扩展字段 {标准 JSON 格式}，见示例值。shopId为店铺id值,连锁店铺为总部店铺ID。consultShopId为店铺id，连锁店铺下为用户当前咨询的店铺；userId为用户唯一id值；userName为用户昵称；token为接口youzan.message.courier.robot.apply的调用凭证，用于异步发送机器人消息;goodsAlias为商品别名，可通过接口youzan.item.detail.api.Item.alias获取商品信息，当咨询从商品详情页发起时才有值；userType为咨询的用户类型，值为youzan时，userId代表用户id，值为other时，userId代表fansId；channel为用户咨询渠道，值为wsc代表微商城H5页面会话，值为wechat代表微信公众号，只为mmp代表微信小程序，值为yzWeapp代表有赞小程序公共版，值为spotlight代表有赞精选小程序，值为guang代表爱逛直播，值为tripartite代表App开店，值为fx代表分销，值为wxdkf代表微小店
     * @var string
     */
    private $ext;

    /**
     * 已废弃字段无需关注
     * @var int
     */
    private $status;



    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getMsgType(): ?string
    {
        return $this->msgType;
    }

    /**
     * @param string $msgType
     */
    public function setMsgType(?string $msgType): void
    {
        $this->msgType = $msgType;
    }

    /**
     * @return string
     */
    public function getExt(): ?string
    {
        return $this->ext;
    }

    /**
     * @param string $ext
     */
    public function setExt(?string $ext): void
    {
        $this->ext = $ext;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}