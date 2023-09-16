<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>class</title>
    </head>
    <body>

        <h1>Classes & Objects</h1>

        <?php 
            class Book {
               public $title;
               public $author;
               public $pages; 
            }
        ?>

        <?php
            $book1 = new Book;
            $book1->title = "Harry Potter";
            $book1->author = "JK Rowling";
            $book1->pages = 450;
        ?>

        <?php
            $book2 = new Book;
            $book2->title = "Lord of the Rings";
            $book2->author = "Tolkien";
            $book2->pages = 725;
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