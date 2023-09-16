<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>construct</title>
    </head>
    <body>

        <h1>Constructors</h1>

        <?php 
            class Book {
               var $title;
               var $author;
               var $pages; 

                function __construct($title, $author, $pages) {
                    $this->title = $title;
                    $this->author = $author;
                    $this->pages = $pages;
                }
            }
        ?>

        <?php
            $book1 = new Book("Harry Potter", "JK Rowling", 400);
            $book2 = new Book("Lord of the Rings", "Tolkien", 719);
        ?>

        <h2>Books</h2>
        <ul>
            <li>
                <?= $book1->title ?> 
                by <?= $book1-> author ?> 
                has <?= $book1-> pages ?> pages.<br>
            </li>
            <li>
                <?= $book2 -> title ?> 
                by <?= $book2 -> author ?> 
                has <?= $book2 -> pages ?> pages.<br>
            </li>
        </ul>

    </body>
</html>