<?php

namespace Com\Youzan\Cloud\Extension\Param\Cloud;

use Com\Youzan\Cloud\Extension\Param\DeliveryToWechatProcessRequestDTO\ItemInfoParam;

/**
 * {}
 * @author Baymax
 * @create 2021-07-05 20:45:27.0
 */
class DeliveryToWechatProcessRequestDTO implements \JsonSerializable {

    /**
     * 有赞店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 有赞订单ID
     * @var string
     */
    private $tid;

    /**
     * 有赞物流公司ID
     * @var int
     */
    private $distCompanyId;

    /**
     * 运单号
     * @var string
     */
    private $expressNo;

    /**
     * 商品信息
     * @var ItemInfoParam
     */
    private $itemInfoParam;



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
     * @return string
     */
    public function getTid(): ?string
    {
        return $this->tid;
    }

    /**
     * @param string $tid
     */
    public function setTid(?string $tid): void
    {
        $this->tid = $tid;
    }

    /**
     * @return int
     */
    public function getDistCompanyId(): ?int
    {
        return $this->distCompanyId;
    }

    /**
     * @param int $distCompanyId
     */
    public function setDistCompanyId(?int $distCompanyId): void
    {
        $this->distCompanyId = $distCompanyId;
    }

    /**
     * @return string
     */
    public function getExpressNo(): ?string
    {
        return $this->expressNo;
    }

    /**
     * @param string $expressNo
     */
    public function setExpressNo(?string $expressNo): void
    {
        $this->expressNo = $expressNo;
    }

    /**
     * @return ItemInfoParam
     */
    public function getItemInfoParam(): ?ItemInfoParam
    {
        return $this->itemInfoParam;
    }

    /**
     * @param ItemInfoParam $itemInfoParam
     */
    public function setItemInfoParam(?ItemInfoParam $itemInfoParam): void
    {
        $this->itemInfoParam = $itemInfoParam;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}