<?php
    include 'controller/booksController.php';
    $name = $_GET["name"];
    $result = searchBook($name);
    if(count($result)>0){

        foreach($result as $b){
            echo "<span>".$b["name"]."</span><br>";
        }
    }
?> 