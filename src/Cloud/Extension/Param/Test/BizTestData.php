<?php
/**
 * Created by IntelliJ IDEA.
 * User: allen
 * Date: 2019-02-27
 * Time: 15:19
 */

namespace Com\Youzan\Cloud\Extension\Param\Test;


class BizTestData
{

    /**
     * The test number
     *
     * @var int
     */
    private $number;

    /**
     * The request content
     *
     * @var string
     */
    private $content;

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
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
     * @return array|mixed
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}