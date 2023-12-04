<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <div class="fors">
        <form action="search.php" method="post">
            <input type="text" name="product" id="lab">
            <input type="submit" name="search" value="Search" id="ser">
        </form>
    </div>
    <style>
        *{
            margin:0;
            padding:0;
        }
        body{
            width: 100%;
            height: 100%;
            position: relative;
        }
        .fors{
            width: 100%;
            height: 100%;
            display:flex;
            justify-content:center;
            position: absolute;
            top: 20em;
        }
        #ser{
            width:200px;
            height:32px;
            font-size:20px;
        }
        #lab{
            width:450px;
            height:30px;
            font-size:20px;    
        }
        
    </style>
</body>

</html>
<?php
 if (isset($_POST['search']))
 {
    $pr = $_POST['product'];
    header("Location: display.php?pr_variable=".urlencode($pr));
    exit();
 }

?>
