<?php




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Palindrome Checker</title>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
        }
        body{
            background: rgb(248, 215, 154);
            font-family: 'Indie Flower', cursive;
            margin: 120px;
        }
        .container{
            width: 600px;
            height: 320px;
        }
        h3{
            padding: 12px;
            font-weight: 700;
        }
        /* h4{
            padding-bottom: 10px;
        } */
    </style>
  </head>
  <body>
    
    <div class="container my-4 bg-warning">
        <form action="" method="post" id="check">
        <h3 class="text-center">Palindrome Checker</h3>
        <h4>
            <?php

                if(isset($_POST['submit'])){
                    $type_word = $_POST['palindrome'];

                    $reverse_word = strrev($type_word);

                    if($type_word === $reverse_word){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Yes!</strong> '.$type_word.' is a palindrome.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                    }
                    else{
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>No!</strong> '.$type_word.' is not a palindrome.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                    }
                }

            ?>
        </h4>
        <div class="mb-3">
        <fieldset>
            <textarea class="form-control" placeholder="Type your word" name="palindrome" required></textarea>
        </fieldset>
        <fieldset>
            <div class="d-grid gap-2 my-3">
                <button class="btn btn-success" type="submit" id="submit" name="submit">Check</button>
                <small class="text-center">Created by Manisha</small>
                </div>
                
        </fieldset>
          </div>
        </form>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>