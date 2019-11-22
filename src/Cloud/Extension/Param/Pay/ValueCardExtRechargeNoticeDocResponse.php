<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 
 * @author Baymax
 * @create 2019-11-22 11:57:30.0
 */
class ValueCardExtRechargeNoticeDocResponse implements \JsonSerializable {

    /**
     * 充值须知文档，注意：返回须为 HTML5 结构型字符串
     * @var string
     */
    private $noticeDoc;

    /**
     * 是否需要强制选择
     * @var bool
     */
    private $forcedChoice;



    /**
     * @return string
     */
    public function getNoticeDoc(): string
    {
        return $this->noticeDoc;
    }

    /**
     * @param string $noticeDoc
     */
    public function setNoticeDoc(string $noticeDoc): void
    {
        $this->noticeDoc = $noticeDoc;
    }

    /**
     * @return bool
     */
    public function getForcedChoice(): bool
    {
        return $this->forcedChoice;
    }

    /**
     * @param bool $forcedChoice
     */
    public function setForcedChoice(bool $forcedChoice): void
    {
        $this->forcedChoice = $forcedChoice;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}