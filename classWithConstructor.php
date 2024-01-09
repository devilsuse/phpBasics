<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
        class Book{
            var $title;
            var $author;
            var $pages;
            function __construct($aTitle, $aAuthor, $aPages){
                $this->$title= $aTitle;
                $this->$author= $aAuthor;
                $this->$pages= $aPages;
            }  
        }

        $book1 = new Book("Ramayana", "Maharishi Valmiki", 7000);
        echo $book1->author;
        ?>
        <script src="" async defer></script>
    </body>
</html>