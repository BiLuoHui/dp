package main

// BookShelf 书架
type BookShelf struct {
	Aggragate
	books []*Book
}

// Iterator 书架迭代器
func (bs *BookShelf) Iterator() *BookShelfIterator {
	return NewBookShelfIterator(bs)
}

// NewBookShelf 初始化一个书架
func NewBookShelf() *BookShelf {
	return &BookShelf{}
}

// GetBookAt 获取指定位置的图书
func (bs *BookShelf) GetBookAt(index int) *Book {
	return bs.books[index]
}

// AppendBook 将一本图书放入书架
func (bs *BookShelf) AppendBook(b *Book)  {
	bs.books = append(bs.books, b)
}

// Len 书架上当前的图书数量
func (bs *BookShelf) Len() int {
	return len(bs.books)
}