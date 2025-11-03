<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 请求参数
 * @author Baymax
 * @create Tue May 27 19:12:50 CST 2025
 */
class ExtGuideQueryTrialFormRequest implements \JsonSerializable {

    /**
     * 试用单号，从导购分享的支付链接url上获取
     * @var string
     */
    private $trialOrderNo;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getTrialOrderNo(): ?string
    {
        return $this->trialOrderNo;
    }

    /**
     * @param string $trialOrderNo
     */
    public function setTrialOrderNo(?string $trialOrderNo): void
    {
        $this->trialOrderNo = $trialOrderNo;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}