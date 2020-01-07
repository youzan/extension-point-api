<?php

namespace Com\Youzan\Cloud\Extension\Param\Im;



/**
 * 
 * @author Baymax
 * @create 2019-10-08 18:23:13.0
 */
class RobotMsgResponse implements \JsonSerializable {

    /**
     * 当消息类型为image时，响应content的内容使用图片链接，请将图片通过素材接口youzan.materials.storage.platform.img.upload上传，拿到有赞图片链接响应；当消息类型为faq时，响应content必须为标准json串，如以下示例{&quot;message&quot;:&quot;faq消息标题&quot;,&quot;faq_items&quot;:[{&quot;faq_id&quot;:0,&quot;keyword&quot;:&quot;1&quot;,&quot;title&quot;:&quot;申请换货&quot;},{&quot;faq_id&quot;:1,&quot;keyword&quot;:&quot;2&quot;,&quot;title&quot;:&quot;申请退款&quot;},{&quot;faq_id&quot;:2,&quot;keyword&quot;:&quot;3&quot;,&quot;title&quot;:&quot;其他咨询&quot;}],&quot;faq_type&quot;:&quot;robot_suggestion&quot;}
     * @var string
     */
    private $content;

    /**
     * 消息类型，文本：text，图片：image，faq问答：faq
     * @var string
     */
    private $msgType;

    /**
     * 0:正常发消息; 1:无答案; 2:请求转人工。当无匹配答案时，响应status为1，将会触发转人工服务，此时msgType和content可以响应无答案话术，也可以不响应内容
     * @var int
     */
    private $status;



    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getMsgType(): string
    {
        return $this->msgType;
    }

    /**
     * @param string $msgType
     */
    public function setMsgType(string $msgType): void
    {
        $this->msgType = $msgType;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}