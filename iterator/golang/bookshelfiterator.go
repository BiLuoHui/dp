package main

type BookShelfIterator struct {
	Iterator
	bookShelf *BookShelf
	nextIdx   int
}

// Next 获取下一个图书
func (bsi *BookShelfIterator) Next() *Book {
	b := bsi.bookShelf.GetBookAt(bsi.nextIdx)
	bsi.nextIdx++
	return b
}

// NewBookShelfIterator 初始化一个书架迭代器
func NewBookShelfIterator(bs *BookShelf) *BookShelfIterator {
	return &BookShelfIterator{
		bookShelf: bs,
	}
}

// HasNext 是否还有下一个图书
func (bsi *BookShelfIterator) HasNext() bool {
	return bsi.nextIdx < bsi.bookShelf.Len()
}
