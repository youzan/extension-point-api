<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 11:29:24.0
 */
class CardProductBaseInfoDTO implements \JsonSerializable {

    /**
     * SPU编号（商品级别,调用方生成,长度不得大于24）
     * @var string
     */
    private $productSpuNo;

    /**
     * 模板名称
     * @var string
     */
    private $templateName;

    /**
     * 模板图片（http全路径,最大长度不得大于225）
     * @var string
     */
    private $templateImg;

    /**
     * 模板最高面额（分）
     * @var int
     */
    private $maxOriginalPrice;

    /**
     * 模板最低面额（分）
     * @var int
     */
    private $minOriginalPrice;



    /**
     * @return string
     */
    public function getProductSpuNo(): string
    {
        return $this->productSpuNo;
    }

    /**
     * @param string $productSpuNo
     */
    public function setProductSpuNo(string $productSpuNo): void
    {
        $this->productSpuNo = $productSpuNo;
    }

    /**
     * @return string
     */
    public function getTemplateName(): string
    {
        return $this->templateName;
    }

    /**
     * @param string $templateName
     */
    public function setTemplateName(string $templateName): void
    {
        $this->templateName = $templateName;
    }

    /**
     * @return string
     */
    public function getTemplateImg(): string
    {
        return $this->templateImg;
    }

    /**
     * @param string $templateImg
     */
    public function setTemplateImg(string $templateImg): void
    {
        $this->templateImg = $templateImg;
    }

    /**
     * @return int
     */
    public function getMaxOriginalPrice(): int
    {
        return $this->maxOriginalPrice;
    }

    /**
     * @param int $maxOriginalPrice
     */
    public function setMaxOriginalPrice(int $maxOriginalPrice): void
    {
        $this->maxOriginalPrice = $maxOriginalPrice;
    }

    /**
     * @return int
     */
    public function getMinOriginalPrice(): int
    {
        return $this->minOriginalPrice;
    }

    /**
     * @param int $minOriginalPrice
     */
    public function setMinOriginalPrice(int $minOriginalPrice): void
    {
        $this->minOriginalPrice = $minOriginalPrice;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}