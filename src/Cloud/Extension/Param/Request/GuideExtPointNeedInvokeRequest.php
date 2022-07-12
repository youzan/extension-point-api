<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 *  
 * @author Baymax
 * @create Fri Apr 22 13:12:46 CST 2022
 */
class GuideExtPointNeedInvokeRequest implements \JsonSerializable {

    /**
     * 场景：1.POS打通
     * @var int
     */
    private $sceneId;

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
     * 业务编号
     * @var string
     */
    private $bizId;



    /**
     * @return int
     */
    public function getSceneId(): ?int
    {
        return $this->sceneId;
    }

    /**
     * @param int $sceneId
     */
    public function setSceneId(?int $sceneId): void
    {
        $this->sceneId = $sceneId;
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

    /**
     * @return string
     */
    public function getBizId(): ?string
    {
        return $this->bizId;
    }

    /**
     * @param string $bizId
     */
    public function setBizId(?string $bizId): void
    {
        $this->bizId = $bizId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}