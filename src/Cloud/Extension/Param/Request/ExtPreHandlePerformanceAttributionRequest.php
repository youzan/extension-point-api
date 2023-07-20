<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 导购业绩归因预处理信息请求
 * @author Baymax
 * @create Mon Jul 10 16:38:33 CST 2023
 */
class ExtPreHandlePerformanceAttributionRequest implements \JsonSerializable {

    /**
     * 订单编号
     * @var string
     */
    private $orderNo;

    /**
     * 触发归因操作的场景；1：支付完成，【目前有 导购产品功能处理支付完成消息 和 分销员储值支付完成消息】，2：发货完成，【暂不支持】
     * @var int
     */
    private $scene;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 总店铺ID
     * @var int
     */
    private $rootKdtId;



    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getScene(): ?int
    {
        return $this->scene;
    }

    /**
     * @param int $scene
     */
    public function setScene(?int $scene): void
    {
        $this->scene = $scene;
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