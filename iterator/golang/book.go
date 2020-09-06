package main

// Book 图书
type Book struct {
	name string
}

// NewBook 创建一本图书
func NewBook(name string) *Book {
	return &Book{name: name}
}

// GetName 获取图书名字
func (b *Book) GetName() string {
	return b.name
}
