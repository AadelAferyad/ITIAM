<?php
    $pr = $_GET['pr_variable'];
    $conn = new mysqli ("localhost", "haruma", "kjkszpj987", "Test1");
    if ($conn->connect_error)
        die("Failed".$conn->connect_error);
    $stmt = $conn->prepare("SELECT * FROM sharshar WHERE title LIKE ?");
    $search = '%'.$pr.'%';
    $stmt->bind_param("s", $search);
    $stmt->execute();
    $result = $stmt->get_result();
    echo '<div class="cards_cont">';
    if ($result)
    {
        while ($row = $result->fetch_assoc())
        {
            $img_path = "./img/".$row['img'];
            echo "<div class=\"cards\">
                  <img src='{$img_path}'/>
                  <div class='cards_info'>
                    <h1>{$row['title']}</h1>
                    <h4>$ {$row['price_2']}</h4>
                  </div>
                </div>";
        }
        echo '</div>';
    }
    else
        echo "Erorr".$stmt->error;
    $stmt->close();
    $conn->close();
    if (isset($_POST['update']))
    {
        
        $conn = new mysqli ("localhost", "haruma", "kjkszpj987", "Test1");
        if ($conn->connect_error)
            die("Failed".$conn->connect_error);
        $stmt = $conn->prepare("UPDATE sharshar SET title LIKE ?");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body style="height:100%;position:realative;">
    <form action="display.php" style="position:absolute;left:35%; padding-bottom:5%;" method="post">
            <label>Id:</label><input type="text"  name="id" >
            <label>Title:<input type="text"  name="title" ></label>
            <label>Old Price:<input type="text"  name="price_1" ></label>
            <label>New Price:<input type="text"  name="price_2" ></label>
            <input type="file"  name="img">
        <input type="submit" value="Update" style="width:200px; " name="update">
        <input type="submit" value="Delete" style="width:200px; ">    

    </form>
</body>
</html>

