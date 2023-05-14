<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
    <?php
      $all = array("A","B","C");
      $Name = "Stephen";
      $male = false;
      echo("Hello Man $Name");
      $index = 1;
      while($index <= 5){
        echo "$index <br>";
        $index++;
      }
      echo("<h1>My Site</h1>");
      $Age = 35;



      class Book{
        var $title;
        var $author;
        var $pages;

      }


      $book1 = new Book;
      $book1->title = "Ash";
      $book1->author = "DN";
      $book1->pages = 400;
    ?>

  </body>
</html>