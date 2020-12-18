<?php
    require_once 'controller/booksController.php';
    $books = getAllBooks();
?>

<html>
    <head>
        <title>Books</title>
        <style>
            body{
                width: 860px;
                margin-left: auto;
                margin-right: auto;
            }
            table, th, td {
                
                padding: 12px 15px;
                font-size: 30px;
                text-align: center;
            }
            table tr td a{
                text-decoration: none;

            }
            table.center {
                margin-left: auto;
                margin-right: auto;
                margin-top: 40px;
            }
            .content-table{
                border-collapse: collapse;
                margin:25px 0;
                font-size:25px;
                min-width:600px;
                border-radius:10px 10px 0 0;
                overflow: hidden;
                box-shadow:0 0 20px rgba(0,0,0,0.15);
            }

            .content-table tr{
                border-bottom: 1px solid #dddddd;
            }
            .content-table tr:nth-of-type(even){
                background-color:#f3f3f3;
            }
            .content-table tr:last-of-type{
                border-bottom: 2px solid #1f7f5c;
            }
            #ssearchbox{
                width: 600px;
                display: block;
                margin-top: 40px;
                margin-left: auto;
                margin-right: auto;
                padding: 15px 5px 15px 20px;
                border-radius:10px;
                font-size: 16px;
                font-family: Montserrat, sans-serif;
                border: 0 none;
                height: 52px;
                color: white;
                outline: none;
                background: #1f7f5c;
            }
            #suggestion{
                width: 600px;
                margin-left: auto;
                margin-right: auto;
                font-size:20px;
                box-shadow:0 0 20px rgba(0,0,0,0.15);

            }
        </style>
    </head>
    <body>
        <input type="text" onkeyup="liveSearch(this)" placeholder="Type here..." id="ssearchBox">
        <div id="suggestion"></div>
        <table class="center content-table" id="myTable">
            <tr> 
                <th>ID</th>
                <th>Name</th>
                <th>Author</th>
                <th>Edition</th>
                <th>Image</th>
            </tr>
            <?php
				foreach($books as $b){
            ?>
            <tr>
            <a href="book_details.php?id=<?php echo $b["id"];?>">
                <td><?php echo $b["id"] ?></td>
                
                <td><a href="book_details.php?id=<?php echo $b["id"];?>"><?php echo $b["name"] ?></a></td>
                <td><?php echo $b["author"] ?></td>
                <td><?php echo $b["edition"] ?></td>
                <td><img src="<?php echo $b["bookimage"] ?>" width= "50px"></td>
            </tr>
            <?php	   
                }
            ?>
        </table>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="js/search_operation.js"></script>
    </body>
</html>