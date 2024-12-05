<?php


abstract class AbstractBook
{

    protected string $title;

    protected array $authors;

    abstract function addBook(): void;

    abstract function getBook(): AbstractBook;
}

$book = new Book();
$book->getBook()->returnBook($book);


class Book extends AbstractBook
{

    protected int $pageCount;

    public function getBook(): Book
    {

        return $this;
    }

    public function returnBook(AbstractBook $book): void {}



    public function addBook(): void {}
}

class DigitalBook extends AbstractBook
{

    private string $bookURL;

    public function getBook(): DigitalBook
    {


        $this->getURL();

        return $this;
    }

    public function returnBook(AbstractBook $book): void {}

    public function getURL(): string
    {

        return $this->bookURL;
    }



    public function addBook(): void {}
}
