package main

import (
	`fmt`
)

func main() {
	bs := NewBookShelf()
	bs.AppendBook(NewBook("平凡的世界"))
	bs.AppendBook(NewBook("小窗幽记"))
	bs.AppendBook(NewBook("围炉夜话"))
	bs.AppendBook(NewBook("成功的基础：毅力与自律"))
	it := bs.Iterator()
	for it.HasNext() {
		b := it.Next()
		fmt.Println(b.GetName())
	}
}
