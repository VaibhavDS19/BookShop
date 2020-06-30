<!DOCTYPE html>
<?php
session_start();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Find Videos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            background-color: black;
            color: gold;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <center>
                <h2><u>Users books</u></h2>
            </center><br><br>

            <?php
            //include("connect.php");
            include("remove_book.php");


            $set_books_list = "select * from book ORDER by 1 DESC ";

            $run_books = mysqli_query($link, $set_books_list);

            while ($row_books = mysqli_fetch_array($run_books)) {
                $id = $row_books['id'];
                $name = $row_books['name'];
                $image = $row_books['image'];
                $authorname = $row_books['authorname'];

                echo "
             <hr><div class = 'col-md-6'>
                            <h3><a style = 'text-decoration:none;cursor:pointer;color:#3897f0;' 
                                        >$name</h3>
                                        <h4><a style = ''text-decoration:none;cursor:pointer;color:#3897f0;' 
                                        >$authorname</h3>
                            </div>
                            <div class = 'col-md-4'>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class = 'col-md-4'>
                                <img id = 'book-img' src = '../images/$image' style = 'height:350px;'>
                            </div>
                        </div><br>
                        <a href = 'remove_book.php?id=$id' style = 'float:right;'>
                        <button class = 'btn btn-danger'>Remove</button></a><br>
                        <a href = '../upload_book.php' style = 'float:right;'>
                        <button class = 'btn btn-success'>Upload</button></a><br>
                    </div>
                    <div class = 'col-md-3'>
                    </div>
                </div><br><br>
             ";
            }
            ?>



</body>

</html>