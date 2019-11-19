<?php
class BookItem
{
    private $BookName;
    private $BookPrice;
    private $BookAuthor;
    private $BookCode;

    /**
     * BookItems constructor.
     * @param $BookName
     * @param $BookPrice
     * @param $BookAuthor
     * @param $BookCode
     */
    public function __construct($BookName, $BookAuthor,$BookPrice, $BookCode)
    {
        $this->BookName = $BookName;
        $this->BookPrice = $BookPrice;
        $this->BookAuthor = $BookAuthor;
        $this->BookCode = $BookCode;
    }

    /**
     * @return mixed
     */
    public function getBookName()
    {
        return $this->BookName;
    }

    /**
     * @param mixed $BookName
     */
    public function setBookName($BookName): void
    {
        $this->BookName = $BookName;
    }

    /**
     * @return mixed
     */
    public function getBookPrice()
    {
        return $this->BookPrice;
    }

    /**
     * @param mixed $BookPrice
     */
    public function setBookPrice($BookPrice): void
    {
        $this->BookPrice = $BookPrice;
    }

    /**
     * @return mixed
     */
    public function getBookAuthor()
    {
        return $this->BookAuthor;
    }

    /**
     * @param mixed $BookAuthor
     */
    public function setBookAuthor($BookAuthor): void
    {
        $this->BookAuthor = $BookAuthor;
    }

    /**
     * @return mixed
     */
    public function getBookCode()
    {
        return $this->BookCode;
    }

    /**
     * @param mixed $BookCode
     */
    public function setBookCode($BookCode): void
    {
        $this->BookCode = $BookCode;
    }


}
?>
