<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\ValueCardExtProductBuyDTO;

/**
 * 
 * @author Baymax
 * @create 2020-03-26 14:05:27.0
 */
class ValueCardBuyDetailDTO implements \JsonSerializable {

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
     * 模板使用说明
     * @var string
     */
    private $instructions;

    /**
     * 子商品（SKU）集合
     * @var array
     */
    private $productInfos;



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
     * @return string
     */
    public function getInstructions(): string
    {
        return $this->instructions;
    }

    /**
     * @param string $instructions
     */
    public function setInstructions(string $instructions): void
    {
        $this->instructions = $instructions;
    }

    /**
     * @return array
     */
    public function getProductInfos(): array
    {
        return $this->productInfos;
    }

    /**
     * @param array $productInfos
     */
    public function setProductInfos(array $productInfos): void
    {
        $this->productInfos = $productInfos;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}