<?php

/**
 * 书架迭代器
 */
class BookShelfIterator implements CustomIterator
{
    /**
     * @var \BookShelf
     */
    private $bookShelf;
    private $index;
    
    function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }
    
    /**
     * @return bool
     */
    public function hasNext()
    {
        return $this->index < $this->bookShelf->getLength();
    }
    
    /**
     * @return \Book
     */
    public function next()
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        
        return $book;
    }
}