public class Main {
    public static void main(String[] args) {
        BookShelf bookShelf = new BookShelf(4);
        bookShelf.appendBook(new Book("平凡的世界"));
        bookShelf.appendBook(new Book("小窗幽记"));
        bookShelf.appendBook(new Book("围炉夜话"));
        bookShelf.appendBook(new Book("成功的基础：毅力与自律"));
        CustomIterator it = bookShelf.customIterator();
        while (it.hasNext()) {
            Book book = (Book)it.next();
            System.out.println(book.getName());
        }
    }
}
