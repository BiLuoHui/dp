<?php

/**
 * 书架
 */
class BookShelf implements Aggregate
{
    /**
     * @var array[Book]
     */
    private $books;
    
    /**
     * @param $index
     *
     * @return \Book
     */
    public function getBookAt($index)
    {
        return $this->books[$index];
    }
    
    /**
     * @param \Book $book
     */
    public function appendBook(Book $book)
    {
        $this->books[] = $book;
    }
    
    /**
     * @return int
     */
    public function getLength()
    {
        return count($this->books);
    }
    
    /**
     * @return \BookShelfIterator
     */
    public function iterator()
    {
        return new BookShelfIterator($this);
    }
}