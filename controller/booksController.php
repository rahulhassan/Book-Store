<?php
    require_once 'db_connect.php';
   
    function getAllBooks(){
        $query = "SELECT * FROM books";
        $result = get($query);
        return $result;
    }
    
    function searchBook($name){
        $query = "SELECT name, id FROM books WHERE name LIKE '%$name%'";
        $result = get($query);
        return $result;
    }
    function getBook($id){
        $query = "SELECT * FROM books WHERE id=$id";
        $result = get($query);
        if(count($result)>0) $result = $result[0];
        return $result;
    }

?>