<?php

namespace Com\Youzan\Cloud\Extension\Param\Im;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-09-26 11:34:21.0
 */
class RobotData implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $inputMsgId;

    /**
     * 
     * @var int
     */
    private $kdtId;

    /**
     * 
     * @var string
     */
    private $conversationId;

    /**
     * 
     * @var string
     */
    private $content;

    /**
     * 
     * @var string
     */
    private $msgType;

    /**
     * 
     * @var int
     */
    private $msgId;

    /**
     * 
     * @var stdClass
     */
    private $attachments;

    /**
     * 
     * @var int
     */
    private $createTime;

    /**
     * 
     * @var string
     */
    private $from;

    /**
     * 
     * @var string
     */
    private $targetUser;

    /**
     * 
     * @var string
     */
    private $channel;

    /**
     * 
     * @var string
     */
    private $ext;

    /**
     * 
     * @var string
     */
    private $status;



    /**
     * @return string
     */
    public function getInputMsgId(): string
    {
        return $this->inputMsgId;
    }

    /**
     * @param string $inputMsgId
     */
    public function setInputMsgId(string $inputMsgId): void
    {
        $this->inputMsgId = $inputMsgId;
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
    public function getConversationId(): string
    {
        return $this->conversationId;
    }

    /**
     * @param string $conversationId
     */
    public function setConversationId(string $conversationId): void
    {
        $this->conversationId = $conversationId;
    }

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
    public function getMsgId(): int
    {
        return $this->msgId;
    }

    /**
     * @param int $msgId
     */
    public function setMsgId(int $msgId): void
    {
        $this->msgId = $msgId;
    }

    /**
     * @return stdClass
     */
    public function getAttachments(): stdClass
    {
        return $this->attachments;
    }

    /**
     * @param stdClass $attachments
     */
    public function setAttachments(stdClass $attachments): void
    {
        $this->attachments = $attachments;
    }

    /**
     * @return int
     */
    public function getCreateTime(): int
    {
        return $this->createTime;
    }

    /**
     * @param int $createTime
     */
    public function setCreateTime(int $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom(string $from): void
    {
        $this->from = $from;
    }

    /**
     * @return string
     */
    public function getTargetUser(): string
    {
        return $this->targetUser;
    }

    /**
     * @param string $targetUser
     */
    public function setTargetUser(string $targetUser): void
    {
        $this->targetUser = $targetUser;
    }

    /**
     * @return string
     */
    public function getChannel(): string
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     */
    public function setChannel(string $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return string
     */
    public function getExt(): string
    {
        return $this->ext;
    }

    /**
     * @param string $ext
     */
    public function setExt(string $ext): void
    {
        $this->ext = $ext;
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