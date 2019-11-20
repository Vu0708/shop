<?php


class DvdItem
{
    private $DvdName;
    private $DvdPrice;
    private $DvdTime;

    /**
     * DvdItems constructor.
     * @param $DvdName
     * @param $DvdPrice
     * @param $DvdTime
     */
    public function __construct($DvdName, $DvdPrice, $DvdTime)
    {
        $this->DvdName = $DvdName;
        $this->DvdPrice = $DvdPrice;
        $this->DvdTime = $DvdTime;
    }

    /**
     * @return mixed
     */
    public function getDvdName()
    {
        return $this->DvdName;
    }

    /**
     * @param mixed $DvdName
     */
    public function setDvdName($DvdName): void
    {
        $this->DvdName = $DvdName;
    }

    /**
     * @return mixed
     */
    public function getDvdPrice()
    {
        return $this->DvdPrice;
    }

    /**
     * @param mixed $DvdPrice
     */
    public function setDvdPrice($DvdPrice): void
    {
        $this->DvdPrice = $DvdPrice;
    }

    /**
     * @return mixed
     */
    public function getDvdTime()
    {
        return $this->DvdTime;
    }

    /**
     * @param mixed $DvdTime
     */
    public function setDvdTime($DvdTime): void
    {
        $this->DvdTime = $DvdTime;
    }
}
?>