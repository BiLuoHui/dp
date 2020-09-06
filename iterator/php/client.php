<?php

require __DIR__ .  DIRECTORY_SEPARATOR . "Aggregate.php";
require __DIR__ .  DIRECTORY_SEPARATOR . "CustomIterator.php";
require __DIR__ .  DIRECTORY_SEPARATOR . "Book.php";
require __DIR__ .  DIRECTORY_SEPARATOR . "BookShelf.php";
require __DIR__ .  DIRECTORY_SEPARATOR . "BookShelfIterator.php";

$bookShelf = new BookShelf();
$bookShelf->appendBook(new Book('平凡的世界'));
$bookShelf->appendBook(new Book('小窗幽记'));
$bookShelf->appendBook(new Book('围炉夜话'));
$bookShelf->appendBook(new Book('成功的基础：毅力与自律'));
$it = $bookShelf->iterator();
while ($it->hasNext()) {
    $book = $it->next();
    print_r($book->getName() . PHP_EOL);
}
